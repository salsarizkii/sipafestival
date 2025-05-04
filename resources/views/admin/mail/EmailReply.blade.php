 hey {{ (string) $name }},
the subject of this email is {{ (string) $subject }}.
your message is {{ $message->body ?? 'No message content available' }}.