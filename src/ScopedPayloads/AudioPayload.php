<?php

namespace DefStudio\Telegraph\ScopedPayloads;

use DefStudio\Telegraph\Concerns\BuildsFromTelegraphClass;
use DefStudio\Telegraph\Telegraph;

class AudioPayload extends Telegraph
{
    use BuildsFromTelegraphClass;

    public function caption(string $caption): static
    {
        $telegraph = clone $this;

        $telegraph->data['caption'] = $caption;

        return $telegraph;
    }

    public function duration(int $duration): static
    {
        $telegraph = clone $this;

        $telegraph->data['duration'] = $duration;

        return $telegraph;
    }

    public function performer(int $performer): static
    {
        $telegraph = clone $this;

        $telegraph->data['performer'] = $performer;

        return $telegraph;
    }

    public function title(int $title): static
    {
        $telegraph = clone $this;

        $telegraph->data['title'] = $title;

        return $telegraph;
    }

    public function thumb(string $thumb): static
    {
        $telegraph = clone $this;

        $telegraph->data['thumb'] = $thumb;

        return $telegraph;
    }
}
