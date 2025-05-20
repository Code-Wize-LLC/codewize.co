<?php

namespace App\Services;

use HubSpot\Client\Crm\Contacts\ApiException as ContactsApiException;
use HubSpot\Factory;
use Illuminate\Support\Facades\Log;

class HubspotLeadService
{
    protected $hubspot;

    public function __construct()
    {
        $this->hubspot = Factory::createWithAccessToken(config('services.hubspot.token'));
    }

    /**
     * Check if a contact exists by email.
     */
    public function findLeadByEmail(string $email): ?array
    {
        try {
            $response = $this->hubspot->crm()->contacts()->searchApi()->doSearch([
                'filterGroups' => [[
                    'filters' => [[
                        'propertyName' => 'email',
                        'operator' => 'EQ',
                        'value' => $email,
                    ]],
                ]],
                'properties' => ['email', 'firstname', 'lastname'],
                'limit' => 1,
            ]);

            if ($response->getTotal() > 0) {
                return $response->getResults()[0]->getProperties();
            }

            return null;
        } catch (ContactsApiException $e) {
            Log::error('HubSpot findLeadByEmail error: '.$e->getMessage());

            return null;
        }
    }

    /**
     * Create a new lead (contact).
     */
    public function createLead(array $data): ?array
    {
        try {
            $contactInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput;
            $contactInput->setProperties([
                'email' => $data['email'],
                'firstname' => $data['firstname'] ?? '',
                'lastname' => $data['lastname'] ?? '',
                'phone' => $data['phone'] ?? '',
                'topic' => $data['topic'] ?? '',
                'details' => $data['details'] ?? '',
                // add more custom fields here if needed
            ]);

            $response = $this->hubspot->crm()->contacts()->basicApi()->create($contactInput);

            return $response->getProperties();
        } catch (ContactsApiException $e) {
            Log::error('HubSpot createLead error: '.$e->getMessage());

            return null;
        }
    }
}
