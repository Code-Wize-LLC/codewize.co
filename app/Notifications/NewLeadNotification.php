<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class NewLeadNotification extends Notification
{
    use Queueable;

    protected array $payload;

    /**
     * Create a new notification instance.
     */
    public function __construct($payload)
    {
        $this->payload = $payload;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['telegram'];
    }

    public function toTelegram($notifiable)
    {
        $name = $this->escape(
            trim(
                ($this->payload['firstname'] ?? '').' '.($this->payload['lastname'] ?? '')
            )
        );

        $email = $this->escape($this->payload['email'] ?? '');
        $phone = $this->escape($this->payload['phone'] ?? '');
        $topic = $this->escape($this->payload['topic'] ?? '');

        return TelegramMessage::create()
            ->to(config('services.telegram-bot-api.chat_id'))
            ->line('*New lead received*')
            ->line("Name: {$name}")
            ->line("Email: {$email}")
            ->line("Phone: {$phone}")
            ->line("Topic: {$topic}")
            ->button(text: 'Go to Hubspot', url: 'https://app.hubspot.com/login')
            ->options(['parse_mode' => 'MarkdownV2']);
    }

    protected function escape(string $text): string
    {
        // Escape all special MarkdownV2 characters, including dot '.'
        return preg_replace('/([_*\[\]()~`>#+\-=|{}.!\\\])/', '\\\\$1', $text);
    }
}
