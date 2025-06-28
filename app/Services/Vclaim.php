<?php

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class Vclaim
{
    private PendingRequest $vclaim;
    private array $headers;

    public function __construct()
    {
        $this->vclaim = Http::baseUrl(config('vclaim.base_url'));
        $this->setHeaders();
    }

    private function setHeaders(): array
    {
        return $this->vclaim->withHeaders([
            'X-cons-id' => config('services.vclaim.consumer_id'),
            'X-timestamp' => now()->timestamp,
            'X-signature' => $this->generateSignature(),
            'user_key' => config('services.vclaim.user_key'),
        ]);
    }

    protected function generateSignature(): string
    {
        $data = config('services.vclaim.consumer_id') . '&' . now()->timestamp;
        return base64_encode(hash_hmac('sha256', $data, config('services.vclaim.secret_key'), true));
    }

    public function fromParticipantNumber(string $participantNumber, $date = null): array
    {
        if (is_null($date)) {
            $date = today()->format('Y-m-d');
        }
        return $this->vclaim->get("Peserta/nokartu/$participantNumber/tglSEP/$date")->json();
    }
}
