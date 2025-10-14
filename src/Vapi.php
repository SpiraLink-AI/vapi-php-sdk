<?php declare(strict_types=1);

namespace Vapi;

use GuzzleHttp\ClientInterface;
use Vapi\Analytics\Analytics;
use Vapi\Assistants\Assistants;
use Vapi\Calls\Calls;
use Vapi\Campaigns\Campaigns;
use Vapi\Chats\Chats;
use Vapi\Core\Client\RawClient;
use Vapi\Eval\Evaluations;
use Vapi\Files\Files;
use Vapi\PhoneNumbers\PhoneNumbers;
use Vapi\ProviderResources\ProviderResources;
use Vapi\Sessions\Sessions;
use Vapi\Squads\Squads;
use Vapi\StructuredOutputs\StructuredOutputs;
use Vapi\Tools\Tools;

final readonly class Vapi
{
    /**
     * @var Assistants $assistants
     */
    public Assistants $assistants;

    /**
     * @var Squads $squads
     */
    public Squads $squads;

    /**
     * @var Calls $calls
     */
    public Calls $calls;

    /**
     * @var Chats $chats
     */
    public Chats $chats;

    /**
     * @var Campaigns $campaigns
     */
    public Campaigns $campaigns;

    /**
     * @var Sessions $sessions
     */
    public Sessions $sessions;

    /**
     * @var PhoneNumbers $phoneNumbers
     */
    public PhoneNumbers $phoneNumbers;

    /**
     * @var Tools $tools
     */
    public Tools $tools;

    /**
     * @var Files $files
     */
    public Files $files;

    /**
     * @var StructuredOutputs $structuredOutputs
     */
    public StructuredOutputs $structuredOutputs;

    /**
     * @var Evaluations $eval
     */
    public Evaluations $eval;

    /**
     * @var ProviderResources $providerResources
     */
    public ProviderResources $providerResources;

    /**
     * @var Analytics $analytics
     */
    public Analytics $analytics;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param string $token The token to use for authentication.
     * @param array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(string $token, array $options = [])
    {
        $options['headers'] = array_merge(['Authorization' => "Bearer {$token}"], $options['headers'] ?? []);

        $this->client = new RawClient($options);

        $this->assistants = new Assistants($this->client, $options);
        $this->squads = new Squads($this->client, $options);
        $this->calls = new Calls($this->client, $options);
        $this->chats = new Chats($this->client, $options);
        $this->campaigns = new Campaigns($this->client, $options);
        $this->sessions = new Sessions($this->client, $options);
        $this->phoneNumbers = new PhoneNumbers($this->client, $options);
        $this->tools = new Tools($this->client, $options);
        $this->files = new Files($this->client, $options);
        $this->structuredOutputs = new StructuredOutputs($this->client, $options);
        $this->eval = new Evaluations($this->client, $options);
        $this->providerResources = new ProviderResources($this->client, $options);
        $this->analytics = new Analytics($this->client, $options);
    }
}
