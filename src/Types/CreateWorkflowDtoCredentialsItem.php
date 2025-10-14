<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class CreateWorkflowDtoCredentialsItem extends JsonSerializableType
{
    /**
     * @var (
     *    '11labs'
     *   |'anthropic'
     *   |'anyscale'
     *   |'assembly-ai'
     *   |'azure-openai'
     *   |'azure'
     *   |'byo-sip-trunk'
     *   |'cartesia'
     *   |'cerebras'
     *   |'cloudflare'
     *   |'custom-llm'
     *   |'deepgram'
     *   |'deepinfra'
     *   |'deep-seek'
     *   |'gcp'
     *   |'gladia'
     *   |'gohighlevel'
     *   |'google'
     *   |'groq'
     *   |'inflection-ai'
     *   |'langfuse'
     *   |'lmnt'
     *   |'make'
     *   |'openai'
     *   |'openrouter'
     *   |'perplexity-ai'
     *   |'playht'
     *   |'rime-ai'
     *   |'runpod'
     *   |'s3'
     *   |'supabase'
     *   |'smallest-ai'
     *   |'tavus'
     *   |'together-ai'
     *   |'twilio'
     *   |'vonage'
     *   |'webhook'
     *   |'custom-credential'
     *   |'xai'
     *   |'neuphonic'
     *   |'hume'
     *   |'mistral'
     *   |'speechmatics'
     *   |'trieve'
     *   |'google.calendar.oauth2-client'
     *   |'google.calendar.oauth2-authorization'
     *   |'google.sheets.oauth2-authorization'
     *   |'slack.oauth2-authorization'
     *   |'ghl.oauth2-authorization'
     *   |'inworld'
     *   |'minimax'
     *   |'_unknown'
     * ) $provider
     */
    public readonly string $provider;

    /**
     * @var (
     *    CreateElevenLabsCredentialDto
     *   |CreateAnthropicCredentialDto
     *   |CreateAnyscaleCredentialDto
     *   |CreateAssemblyAiCredentialDto
     *   |CreateAzureOpenAiCredentialDto
     *   |CreateAzureCredentialDto
     *   |CreateByoSipTrunkCredentialDto
     *   |CreateCartesiaCredentialDto
     *   |CreateCerebrasCredentialDto
     *   |CreateCloudflareCredentialDto
     *   |CreateCustomLlmCredentialDto
     *   |CreateDeepgramCredentialDto
     *   |CreateDeepInfraCredentialDto
     *   |CreateDeepSeekCredentialDto
     *   |CreateGcpCredentialDto
     *   |CreateGladiaCredentialDto
     *   |CreateGoHighLevelCredentialDto
     *   |CreateGoogleCredentialDto
     *   |CreateGroqCredentialDto
     *   |CreateInflectionAiCredentialDto
     *   |CreateLangfuseCredentialDto
     *   |CreateLmntCredentialDto
     *   |CreateMakeCredentialDto
     *   |CreateOpenAiCredentialDto
     *   |CreateOpenRouterCredentialDto
     *   |CreatePerplexityAiCredentialDto
     *   |CreatePlayHtCredentialDto
     *   |CreateRimeAiCredentialDto
     *   |CreateRunpodCredentialDto
     *   |CreateS3CredentialDto
     *   |CreateSupabaseCredentialDto
     *   |CreateSmallestAiCredentialDto
     *   |CreateTavusCredentialDto
     *   |CreateTogetherAiCredentialDto
     *   |CreateTwilioCredentialDto
     *   |CreateVonageCredentialDto
     *   |CreateWebhookCredentialDto
     *   |CreateCustomCredentialDto
     *   |CreateXAiCredentialDto
     *   |CreateNeuphonicCredentialDto
     *   |CreateHumeCredentialDto
     *   |CreateMistralCredentialDto
     *   |CreateSpeechmaticsCredentialDto
     *   |CreateTrieveCredentialDto
     *   |CreateGoogleCalendarOAuth2ClientCredentialDto
     *   |CreateGoogleCalendarOAuth2AuthorizationCredentialDto
     *   |CreateGoogleSheetsOAuth2AuthorizationCredentialDto
     *   |CreateSlackOAuth2AuthorizationCredentialDto
     *   |CreateGoHighLevelMcpCredentialDto
     *   |CreateInworldCredentialDto
     *   |CreateMinimaxCredentialDto
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   provider: (
     *    '11labs'
     *   |'anthropic'
     *   |'anyscale'
     *   |'assembly-ai'
     *   |'azure-openai'
     *   |'azure'
     *   |'byo-sip-trunk'
     *   |'cartesia'
     *   |'cerebras'
     *   |'cloudflare'
     *   |'custom-llm'
     *   |'deepgram'
     *   |'deepinfra'
     *   |'deep-seek'
     *   |'gcp'
     *   |'gladia'
     *   |'gohighlevel'
     *   |'google'
     *   |'groq'
     *   |'inflection-ai'
     *   |'langfuse'
     *   |'lmnt'
     *   |'make'
     *   |'openai'
     *   |'openrouter'
     *   |'perplexity-ai'
     *   |'playht'
     *   |'rime-ai'
     *   |'runpod'
     *   |'s3'
     *   |'supabase'
     *   |'smallest-ai'
     *   |'tavus'
     *   |'together-ai'
     *   |'twilio'
     *   |'vonage'
     *   |'webhook'
     *   |'custom-credential'
     *   |'xai'
     *   |'neuphonic'
     *   |'hume'
     *   |'mistral'
     *   |'speechmatics'
     *   |'trieve'
     *   |'google.calendar.oauth2-client'
     *   |'google.calendar.oauth2-authorization'
     *   |'google.sheets.oauth2-authorization'
     *   |'slack.oauth2-authorization'
     *   |'ghl.oauth2-authorization'
     *   |'inworld'
     *   |'minimax'
     *   |'_unknown'
     * ),
     *   value: (
     *    CreateElevenLabsCredentialDto
     *   |CreateAnthropicCredentialDto
     *   |CreateAnyscaleCredentialDto
     *   |CreateAssemblyAiCredentialDto
     *   |CreateAzureOpenAiCredentialDto
     *   |CreateAzureCredentialDto
     *   |CreateByoSipTrunkCredentialDto
     *   |CreateCartesiaCredentialDto
     *   |CreateCerebrasCredentialDto
     *   |CreateCloudflareCredentialDto
     *   |CreateCustomLlmCredentialDto
     *   |CreateDeepgramCredentialDto
     *   |CreateDeepInfraCredentialDto
     *   |CreateDeepSeekCredentialDto
     *   |CreateGcpCredentialDto
     *   |CreateGladiaCredentialDto
     *   |CreateGoHighLevelCredentialDto
     *   |CreateGoogleCredentialDto
     *   |CreateGroqCredentialDto
     *   |CreateInflectionAiCredentialDto
     *   |CreateLangfuseCredentialDto
     *   |CreateLmntCredentialDto
     *   |CreateMakeCredentialDto
     *   |CreateOpenAiCredentialDto
     *   |CreateOpenRouterCredentialDto
     *   |CreatePerplexityAiCredentialDto
     *   |CreatePlayHtCredentialDto
     *   |CreateRimeAiCredentialDto
     *   |CreateRunpodCredentialDto
     *   |CreateS3CredentialDto
     *   |CreateSupabaseCredentialDto
     *   |CreateSmallestAiCredentialDto
     *   |CreateTavusCredentialDto
     *   |CreateTogetherAiCredentialDto
     *   |CreateTwilioCredentialDto
     *   |CreateVonageCredentialDto
     *   |CreateWebhookCredentialDto
     *   |CreateCustomCredentialDto
     *   |CreateXAiCredentialDto
     *   |CreateNeuphonicCredentialDto
     *   |CreateHumeCredentialDto
     *   |CreateMistralCredentialDto
     *   |CreateSpeechmaticsCredentialDto
     *   |CreateTrieveCredentialDto
     *   |CreateGoogleCalendarOAuth2ClientCredentialDto
     *   |CreateGoogleCalendarOAuth2AuthorizationCredentialDto
     *   |CreateGoogleSheetsOAuth2AuthorizationCredentialDto
     *   |CreateSlackOAuth2AuthorizationCredentialDto
     *   |CreateGoHighLevelMcpCredentialDto
     *   |CreateInworldCredentialDto
     *   |CreateMinimaxCredentialDto
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->value = $values['value'];
    }

    /**
     * @param CreateElevenLabsCredentialDto $_11Labs
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function _11Labs(CreateElevenLabsCredentialDto $_11Labs): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => '11labs',
            'value' => $_11Labs,
        ]);
    }

    /**
     * @param CreateAnthropicCredentialDto $anthropic
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function anthropic(CreateAnthropicCredentialDto $anthropic): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'anthropic',
            'value' => $anthropic,
        ]);
    }

    /**
     * @param CreateAnyscaleCredentialDto $anyscale
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function anyscale(CreateAnyscaleCredentialDto $anyscale): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'anyscale',
            'value' => $anyscale,
        ]);
    }

    /**
     * @param CreateAssemblyAiCredentialDto $assemblyAi
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function assemblyAi(CreateAssemblyAiCredentialDto $assemblyAi): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'assembly-ai',
            'value' => $assemblyAi,
        ]);
    }

    /**
     * @param CreateAzureOpenAiCredentialDto $azureOpenai
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function azureOpenai(CreateAzureOpenAiCredentialDto $azureOpenai): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'azure-openai',
            'value' => $azureOpenai,
        ]);
    }

    /**
     * @param CreateAzureCredentialDto $azure
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function azure(CreateAzureCredentialDto $azure): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'azure',
            'value' => $azure,
        ]);
    }

    /**
     * @param CreateByoSipTrunkCredentialDto $byoSipTrunk
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function byoSipTrunk(CreateByoSipTrunkCredentialDto $byoSipTrunk): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'byo-sip-trunk',
            'value' => $byoSipTrunk,
        ]);
    }

    /**
     * @param CreateCartesiaCredentialDto $cartesia
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function cartesia(CreateCartesiaCredentialDto $cartesia): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'cartesia',
            'value' => $cartesia,
        ]);
    }

    /**
     * @param CreateCerebrasCredentialDto $cerebras
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function cerebras(CreateCerebrasCredentialDto $cerebras): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'cerebras',
            'value' => $cerebras,
        ]);
    }

    /**
     * @param CreateCloudflareCredentialDto $cloudflare
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function cloudflare(CreateCloudflareCredentialDto $cloudflare): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'cloudflare',
            'value' => $cloudflare,
        ]);
    }

    /**
     * @param CreateCustomLlmCredentialDto $customLlm
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function customLlm(CreateCustomLlmCredentialDto $customLlm): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'custom-llm',
            'value' => $customLlm,
        ]);
    }

    /**
     * @param CreateDeepgramCredentialDto $deepgram
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function deepgram(CreateDeepgramCredentialDto $deepgram): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'deepgram',
            'value' => $deepgram,
        ]);
    }

    /**
     * @param CreateDeepInfraCredentialDto $deepinfra
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function deepinfra(CreateDeepInfraCredentialDto $deepinfra): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'deepinfra',
            'value' => $deepinfra,
        ]);
    }

    /**
     * @param CreateDeepSeekCredentialDto $deepSeek
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function deepSeek(CreateDeepSeekCredentialDto $deepSeek): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'deep-seek',
            'value' => $deepSeek,
        ]);
    }

    /**
     * @param CreateGcpCredentialDto $gcp
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function gcp(CreateGcpCredentialDto $gcp): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'gcp',
            'value' => $gcp,
        ]);
    }

    /**
     * @param CreateGladiaCredentialDto $gladia
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function gladia(CreateGladiaCredentialDto $gladia): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'gladia',
            'value' => $gladia,
        ]);
    }

    /**
     * @param CreateGoHighLevelCredentialDto $gohighlevel
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function gohighlevel(CreateGoHighLevelCredentialDto $gohighlevel): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'gohighlevel',
            'value' => $gohighlevel,
        ]);
    }

    /**
     * @param CreateGoogleCredentialDto $google
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function google(CreateGoogleCredentialDto $google): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'google',
            'value' => $google,
        ]);
    }

    /**
     * @param CreateGroqCredentialDto $groq
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function groq(CreateGroqCredentialDto $groq): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'groq',
            'value' => $groq,
        ]);
    }

    /**
     * @param CreateInflectionAiCredentialDto $inflectionAi
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function inflectionAi(CreateInflectionAiCredentialDto $inflectionAi): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'inflection-ai',
            'value' => $inflectionAi,
        ]);
    }

    /**
     * @param CreateLangfuseCredentialDto $langfuse
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function langfuse(CreateLangfuseCredentialDto $langfuse): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'langfuse',
            'value' => $langfuse,
        ]);
    }

    /**
     * @param CreateLmntCredentialDto $lmnt
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function lmnt(CreateLmntCredentialDto $lmnt): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'lmnt',
            'value' => $lmnt,
        ]);
    }

    /**
     * @param CreateMakeCredentialDto $make
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function make(CreateMakeCredentialDto $make): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'make',
            'value' => $make,
        ]);
    }

    /**
     * @param CreateOpenAiCredentialDto $openai
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function openai(CreateOpenAiCredentialDto $openai): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'openai',
            'value' => $openai,
        ]);
    }

    /**
     * @param CreateOpenRouterCredentialDto $openrouter
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function openrouter(CreateOpenRouterCredentialDto $openrouter): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'openrouter',
            'value' => $openrouter,
        ]);
    }

    /**
     * @param CreatePerplexityAiCredentialDto $perplexityAi
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function perplexityAi(CreatePerplexityAiCredentialDto $perplexityAi): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'perplexity-ai',
            'value' => $perplexityAi,
        ]);
    }

    /**
     * @param CreatePlayHtCredentialDto $playht
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function playht(CreatePlayHtCredentialDto $playht): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'playht',
            'value' => $playht,
        ]);
    }

    /**
     * @param CreateRimeAiCredentialDto $rimeAi
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function rimeAi(CreateRimeAiCredentialDto $rimeAi): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'rime-ai',
            'value' => $rimeAi,
        ]);
    }

    /**
     * @param CreateRunpodCredentialDto $runpod
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function runpod(CreateRunpodCredentialDto $runpod): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'runpod',
            'value' => $runpod,
        ]);
    }

    /**
     * @param CreateS3CredentialDto $s3
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function s3(CreateS3CredentialDto $s3): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 's3',
            'value' => $s3,
        ]);
    }

    /**
     * @param CreateSupabaseCredentialDto $supabase
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function supabase(CreateSupabaseCredentialDto $supabase): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'supabase',
            'value' => $supabase,
        ]);
    }

    /**
     * @param CreateSmallestAiCredentialDto $smallestAi
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function smallestAi(CreateSmallestAiCredentialDto $smallestAi): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'smallest-ai',
            'value' => $smallestAi,
        ]);
    }

    /**
     * @param CreateTavusCredentialDto $tavus
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function tavus(CreateTavusCredentialDto $tavus): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'tavus',
            'value' => $tavus,
        ]);
    }

    /**
     * @param CreateTogetherAiCredentialDto $togetherAi
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function togetherAi(CreateTogetherAiCredentialDto $togetherAi): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'together-ai',
            'value' => $togetherAi,
        ]);
    }

    /**
     * @param CreateTwilioCredentialDto $twilio
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function twilio(CreateTwilioCredentialDto $twilio): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'twilio',
            'value' => $twilio,
        ]);
    }

    /**
     * @param CreateVonageCredentialDto $vonage
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function vonage(CreateVonageCredentialDto $vonage): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'vonage',
            'value' => $vonage,
        ]);
    }

    /**
     * @param CreateWebhookCredentialDto $webhook
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function webhook(CreateWebhookCredentialDto $webhook): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'webhook',
            'value' => $webhook,
        ]);
    }

    /**
     * @param CreateCustomCredentialDto $customCredential
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function customCredential(CreateCustomCredentialDto $customCredential): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'custom-credential',
            'value' => $customCredential,
        ]);
    }

    /**
     * @param CreateXAiCredentialDto $xai
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function xai(CreateXAiCredentialDto $xai): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'xai',
            'value' => $xai,
        ]);
    }

    /**
     * @param CreateNeuphonicCredentialDto $neuphonic
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function neuphonic(CreateNeuphonicCredentialDto $neuphonic): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'neuphonic',
            'value' => $neuphonic,
        ]);
    }

    /**
     * @param CreateHumeCredentialDto $hume
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function hume(CreateHumeCredentialDto $hume): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'hume',
            'value' => $hume,
        ]);
    }

    /**
     * @param CreateMistralCredentialDto $mistral
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function mistral(CreateMistralCredentialDto $mistral): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'mistral',
            'value' => $mistral,
        ]);
    }

    /**
     * @param CreateSpeechmaticsCredentialDto $speechmatics
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function speechmatics(CreateSpeechmaticsCredentialDto $speechmatics): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'speechmatics',
            'value' => $speechmatics,
        ]);
    }

    /**
     * @param CreateTrieveCredentialDto $trieve
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function trieve(CreateTrieveCredentialDto $trieve): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'trieve',
            'value' => $trieve,
        ]);
    }

    /**
     * @param CreateGoogleCalendarOAuth2ClientCredentialDto $googleCalendarOauth2Client
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function googleCalendarOauth2Client(CreateGoogleCalendarOAuth2ClientCredentialDto $googleCalendarOauth2Client): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'google.calendar.oauth2-client',
            'value' => $googleCalendarOauth2Client,
        ]);
    }

    /**
     * @param CreateGoogleCalendarOAuth2AuthorizationCredentialDto $googleCalendarOauth2Authorization
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function googleCalendarOauth2Authorization(CreateGoogleCalendarOAuth2AuthorizationCredentialDto $googleCalendarOauth2Authorization): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'google.calendar.oauth2-authorization',
            'value' => $googleCalendarOauth2Authorization,
        ]);
    }

    /**
     * @param CreateGoogleSheetsOAuth2AuthorizationCredentialDto $googleSheetsOauth2Authorization
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function googleSheetsOauth2Authorization(CreateGoogleSheetsOAuth2AuthorizationCredentialDto $googleSheetsOauth2Authorization): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'google.sheets.oauth2-authorization',
            'value' => $googleSheetsOauth2Authorization,
        ]);
    }

    /**
     * @param CreateSlackOAuth2AuthorizationCredentialDto $slackOauth2Authorization
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function slackOauth2Authorization(CreateSlackOAuth2AuthorizationCredentialDto $slackOauth2Authorization): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'slack.oauth2-authorization',
            'value' => $slackOauth2Authorization,
        ]);
    }

    /**
     * @param CreateGoHighLevelMcpCredentialDto $ghlOauth2Authorization
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function ghlOauth2Authorization(CreateGoHighLevelMcpCredentialDto $ghlOauth2Authorization): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'ghl.oauth2-authorization',
            'value' => $ghlOauth2Authorization,
        ]);
    }

    /**
     * @param CreateInworldCredentialDto $inworld
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function inworld(CreateInworldCredentialDto $inworld): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'inworld',
            'value' => $inworld,
        ]);
    }

    /**
     * @param CreateMinimaxCredentialDto $minimax
     * @return CreateWorkflowDtoCredentialsItem
     */
    public static function minimax(CreateMinimaxCredentialDto $minimax): CreateWorkflowDtoCredentialsItem
    {
        return new CreateWorkflowDtoCredentialsItem([
            'provider' => 'minimax',
            'value' => $minimax,
        ]);
    }

    /**
     * @return bool
     */
    public function is_11Labs(): bool
    {
        return $this->value instanceof CreateElevenLabsCredentialDto && $this->provider === '11labs';
    }

    /**
     * @return CreateElevenLabsCredentialDto
     */
    public function as_11Labs(): CreateElevenLabsCredentialDto
    {
        if (! ($this->value instanceof CreateElevenLabsCredentialDto && $this->provider === '11labs')) {
            throw new Exception(
                "Expected 11labs; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAnthropic(): bool
    {
        return $this->value instanceof CreateAnthropicCredentialDto && $this->provider === 'anthropic';
    }

    /**
     * @return CreateAnthropicCredentialDto
     */
    public function asAnthropic(): CreateAnthropicCredentialDto
    {
        if (! ($this->value instanceof CreateAnthropicCredentialDto && $this->provider === 'anthropic')) {
            throw new Exception(
                "Expected anthropic; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAnyscale(): bool
    {
        return $this->value instanceof CreateAnyscaleCredentialDto && $this->provider === 'anyscale';
    }

    /**
     * @return CreateAnyscaleCredentialDto
     */
    public function asAnyscale(): CreateAnyscaleCredentialDto
    {
        if (! ($this->value instanceof CreateAnyscaleCredentialDto && $this->provider === 'anyscale')) {
            throw new Exception(
                "Expected anyscale; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAssemblyAi(): bool
    {
        return $this->value instanceof CreateAssemblyAiCredentialDto && $this->provider === 'assembly-ai';
    }

    /**
     * @return CreateAssemblyAiCredentialDto
     */
    public function asAssemblyAi(): CreateAssemblyAiCredentialDto
    {
        if (! ($this->value instanceof CreateAssemblyAiCredentialDto && $this->provider === 'assembly-ai')) {
            throw new Exception(
                "Expected assembly-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAzureOpenai(): bool
    {
        return $this->value instanceof CreateAzureOpenAiCredentialDto && $this->provider === 'azure-openai';
    }

    /**
     * @return CreateAzureOpenAiCredentialDto
     */
    public function asAzureOpenai(): CreateAzureOpenAiCredentialDto
    {
        if (! ($this->value instanceof CreateAzureOpenAiCredentialDto && $this->provider === 'azure-openai')) {
            throw new Exception(
                "Expected azure-openai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAzure(): bool
    {
        return $this->value instanceof CreateAzureCredentialDto && $this->provider === 'azure';
    }

    /**
     * @return CreateAzureCredentialDto
     */
    public function asAzure(): CreateAzureCredentialDto
    {
        if (! ($this->value instanceof CreateAzureCredentialDto && $this->provider === 'azure')) {
            throw new Exception(
                "Expected azure; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isByoSipTrunk(): bool
    {
        return $this->value instanceof CreateByoSipTrunkCredentialDto && $this->provider === 'byo-sip-trunk';
    }

    /**
     * @return CreateByoSipTrunkCredentialDto
     */
    public function asByoSipTrunk(): CreateByoSipTrunkCredentialDto
    {
        if (! ($this->value instanceof CreateByoSipTrunkCredentialDto && $this->provider === 'byo-sip-trunk')) {
            throw new Exception(
                "Expected byo-sip-trunk; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCartesia(): bool
    {
        return $this->value instanceof CreateCartesiaCredentialDto && $this->provider === 'cartesia';
    }

    /**
     * @return CreateCartesiaCredentialDto
     */
    public function asCartesia(): CreateCartesiaCredentialDto
    {
        if (! ($this->value instanceof CreateCartesiaCredentialDto && $this->provider === 'cartesia')) {
            throw new Exception(
                "Expected cartesia; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCerebras(): bool
    {
        return $this->value instanceof CreateCerebrasCredentialDto && $this->provider === 'cerebras';
    }

    /**
     * @return CreateCerebrasCredentialDto
     */
    public function asCerebras(): CreateCerebrasCredentialDto
    {
        if (! ($this->value instanceof CreateCerebrasCredentialDto && $this->provider === 'cerebras')) {
            throw new Exception(
                "Expected cerebras; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCloudflare(): bool
    {
        return $this->value instanceof CreateCloudflareCredentialDto && $this->provider === 'cloudflare';
    }

    /**
     * @return CreateCloudflareCredentialDto
     */
    public function asCloudflare(): CreateCloudflareCredentialDto
    {
        if (! ($this->value instanceof CreateCloudflareCredentialDto && $this->provider === 'cloudflare')) {
            throw new Exception(
                "Expected cloudflare; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCustomLlm(): bool
    {
        return $this->value instanceof CreateCustomLlmCredentialDto && $this->provider === 'custom-llm';
    }

    /**
     * @return CreateCustomLlmCredentialDto
     */
    public function asCustomLlm(): CreateCustomLlmCredentialDto
    {
        if (! ($this->value instanceof CreateCustomLlmCredentialDto && $this->provider === 'custom-llm')) {
            throw new Exception(
                "Expected custom-llm; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDeepgram(): bool
    {
        return $this->value instanceof CreateDeepgramCredentialDto && $this->provider === 'deepgram';
    }

    /**
     * @return CreateDeepgramCredentialDto
     */
    public function asDeepgram(): CreateDeepgramCredentialDto
    {
        if (! ($this->value instanceof CreateDeepgramCredentialDto && $this->provider === 'deepgram')) {
            throw new Exception(
                "Expected deepgram; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDeepinfra(): bool
    {
        return $this->value instanceof CreateDeepInfraCredentialDto && $this->provider === 'deepinfra';
    }

    /**
     * @return CreateDeepInfraCredentialDto
     */
    public function asDeepinfra(): CreateDeepInfraCredentialDto
    {
        if (! ($this->value instanceof CreateDeepInfraCredentialDto && $this->provider === 'deepinfra')) {
            throw new Exception(
                "Expected deepinfra; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDeepSeek(): bool
    {
        return $this->value instanceof CreateDeepSeekCredentialDto && $this->provider === 'deep-seek';
    }

    /**
     * @return CreateDeepSeekCredentialDto
     */
    public function asDeepSeek(): CreateDeepSeekCredentialDto
    {
        if (! ($this->value instanceof CreateDeepSeekCredentialDto && $this->provider === 'deep-seek')) {
            throw new Exception(
                "Expected deep-seek; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGcp(): bool
    {
        return $this->value instanceof CreateGcpCredentialDto && $this->provider === 'gcp';
    }

    /**
     * @return CreateGcpCredentialDto
     */
    public function asGcp(): CreateGcpCredentialDto
    {
        if (! ($this->value instanceof CreateGcpCredentialDto && $this->provider === 'gcp')) {
            throw new Exception(
                "Expected gcp; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGladia(): bool
    {
        return $this->value instanceof CreateGladiaCredentialDto && $this->provider === 'gladia';
    }

    /**
     * @return CreateGladiaCredentialDto
     */
    public function asGladia(): CreateGladiaCredentialDto
    {
        if (! ($this->value instanceof CreateGladiaCredentialDto && $this->provider === 'gladia')) {
            throw new Exception(
                "Expected gladia; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGohighlevel(): bool
    {
        return $this->value instanceof CreateGoHighLevelCredentialDto && $this->provider === 'gohighlevel';
    }

    /**
     * @return CreateGoHighLevelCredentialDto
     */
    public function asGohighlevel(): CreateGoHighLevelCredentialDto
    {
        if (! ($this->value instanceof CreateGoHighLevelCredentialDto && $this->provider === 'gohighlevel')) {
            throw new Exception(
                "Expected gohighlevel; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogle(): bool
    {
        return $this->value instanceof CreateGoogleCredentialDto && $this->provider === 'google';
    }

    /**
     * @return CreateGoogleCredentialDto
     */
    public function asGoogle(): CreateGoogleCredentialDto
    {
        if (! ($this->value instanceof CreateGoogleCredentialDto && $this->provider === 'google')) {
            throw new Exception(
                "Expected google; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGroq(): bool
    {
        return $this->value instanceof CreateGroqCredentialDto && $this->provider === 'groq';
    }

    /**
     * @return CreateGroqCredentialDto
     */
    public function asGroq(): CreateGroqCredentialDto
    {
        if (! ($this->value instanceof CreateGroqCredentialDto && $this->provider === 'groq')) {
            throw new Exception(
                "Expected groq; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isInflectionAi(): bool
    {
        return $this->value instanceof CreateInflectionAiCredentialDto && $this->provider === 'inflection-ai';
    }

    /**
     * @return CreateInflectionAiCredentialDto
     */
    public function asInflectionAi(): CreateInflectionAiCredentialDto
    {
        if (! ($this->value instanceof CreateInflectionAiCredentialDto && $this->provider === 'inflection-ai')) {
            throw new Exception(
                "Expected inflection-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLangfuse(): bool
    {
        return $this->value instanceof CreateLangfuseCredentialDto && $this->provider === 'langfuse';
    }

    /**
     * @return CreateLangfuseCredentialDto
     */
    public function asLangfuse(): CreateLangfuseCredentialDto
    {
        if (! ($this->value instanceof CreateLangfuseCredentialDto && $this->provider === 'langfuse')) {
            throw new Exception(
                "Expected langfuse; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLmnt(): bool
    {
        return $this->value instanceof CreateLmntCredentialDto && $this->provider === 'lmnt';
    }

    /**
     * @return CreateLmntCredentialDto
     */
    public function asLmnt(): CreateLmntCredentialDto
    {
        if (! ($this->value instanceof CreateLmntCredentialDto && $this->provider === 'lmnt')) {
            throw new Exception(
                "Expected lmnt; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMake(): bool
    {
        return $this->value instanceof CreateMakeCredentialDto && $this->provider === 'make';
    }

    /**
     * @return CreateMakeCredentialDto
     */
    public function asMake(): CreateMakeCredentialDto
    {
        if (! ($this->value instanceof CreateMakeCredentialDto && $this->provider === 'make')) {
            throw new Exception(
                "Expected make; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOpenai(): bool
    {
        return $this->value instanceof CreateOpenAiCredentialDto && $this->provider === 'openai';
    }

    /**
     * @return CreateOpenAiCredentialDto
     */
    public function asOpenai(): CreateOpenAiCredentialDto
    {
        if (! ($this->value instanceof CreateOpenAiCredentialDto && $this->provider === 'openai')) {
            throw new Exception(
                "Expected openai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOpenrouter(): bool
    {
        return $this->value instanceof CreateOpenRouterCredentialDto && $this->provider === 'openrouter';
    }

    /**
     * @return CreateOpenRouterCredentialDto
     */
    public function asOpenrouter(): CreateOpenRouterCredentialDto
    {
        if (! ($this->value instanceof CreateOpenRouterCredentialDto && $this->provider === 'openrouter')) {
            throw new Exception(
                "Expected openrouter; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPerplexityAi(): bool
    {
        return $this->value instanceof CreatePerplexityAiCredentialDto && $this->provider === 'perplexity-ai';
    }

    /**
     * @return CreatePerplexityAiCredentialDto
     */
    public function asPerplexityAi(): CreatePerplexityAiCredentialDto
    {
        if (! ($this->value instanceof CreatePerplexityAiCredentialDto && $this->provider === 'perplexity-ai')) {
            throw new Exception(
                "Expected perplexity-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPlayht(): bool
    {
        return $this->value instanceof CreatePlayHtCredentialDto && $this->provider === 'playht';
    }

    /**
     * @return CreatePlayHtCredentialDto
     */
    public function asPlayht(): CreatePlayHtCredentialDto
    {
        if (! ($this->value instanceof CreatePlayHtCredentialDto && $this->provider === 'playht')) {
            throw new Exception(
                "Expected playht; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRimeAi(): bool
    {
        return $this->value instanceof CreateRimeAiCredentialDto && $this->provider === 'rime-ai';
    }

    /**
     * @return CreateRimeAiCredentialDto
     */
    public function asRimeAi(): CreateRimeAiCredentialDto
    {
        if (! ($this->value instanceof CreateRimeAiCredentialDto && $this->provider === 'rime-ai')) {
            throw new Exception(
                "Expected rime-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRunpod(): bool
    {
        return $this->value instanceof CreateRunpodCredentialDto && $this->provider === 'runpod';
    }

    /**
     * @return CreateRunpodCredentialDto
     */
    public function asRunpod(): CreateRunpodCredentialDto
    {
        if (! ($this->value instanceof CreateRunpodCredentialDto && $this->provider === 'runpod')) {
            throw new Exception(
                "Expected runpod; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isS3(): bool
    {
        return $this->value instanceof CreateS3CredentialDto && $this->provider === 's3';
    }

    /**
     * @return CreateS3CredentialDto
     */
    public function asS3(): CreateS3CredentialDto
    {
        if (! ($this->value instanceof CreateS3CredentialDto && $this->provider === 's3')) {
            throw new Exception(
                "Expected s3; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSupabase(): bool
    {
        return $this->value instanceof CreateSupabaseCredentialDto && $this->provider === 'supabase';
    }

    /**
     * @return CreateSupabaseCredentialDto
     */
    public function asSupabase(): CreateSupabaseCredentialDto
    {
        if (! ($this->value instanceof CreateSupabaseCredentialDto && $this->provider === 'supabase')) {
            throw new Exception(
                "Expected supabase; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSmallestAi(): bool
    {
        return $this->value instanceof CreateSmallestAiCredentialDto && $this->provider === 'smallest-ai';
    }

    /**
     * @return CreateSmallestAiCredentialDto
     */
    public function asSmallestAi(): CreateSmallestAiCredentialDto
    {
        if (! ($this->value instanceof CreateSmallestAiCredentialDto && $this->provider === 'smallest-ai')) {
            throw new Exception(
                "Expected smallest-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTavus(): bool
    {
        return $this->value instanceof CreateTavusCredentialDto && $this->provider === 'tavus';
    }

    /**
     * @return CreateTavusCredentialDto
     */
    public function asTavus(): CreateTavusCredentialDto
    {
        if (! ($this->value instanceof CreateTavusCredentialDto && $this->provider === 'tavus')) {
            throw new Exception(
                "Expected tavus; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTogetherAi(): bool
    {
        return $this->value instanceof CreateTogetherAiCredentialDto && $this->provider === 'together-ai';
    }

    /**
     * @return CreateTogetherAiCredentialDto
     */
    public function asTogetherAi(): CreateTogetherAiCredentialDto
    {
        if (! ($this->value instanceof CreateTogetherAiCredentialDto && $this->provider === 'together-ai')) {
            throw new Exception(
                "Expected together-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTwilio(): bool
    {
        return $this->value instanceof CreateTwilioCredentialDto && $this->provider === 'twilio';
    }

    /**
     * @return CreateTwilioCredentialDto
     */
    public function asTwilio(): CreateTwilioCredentialDto
    {
        if (! ($this->value instanceof CreateTwilioCredentialDto && $this->provider === 'twilio')) {
            throw new Exception(
                "Expected twilio; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVonage(): bool
    {
        return $this->value instanceof CreateVonageCredentialDto && $this->provider === 'vonage';
    }

    /**
     * @return CreateVonageCredentialDto
     */
    public function asVonage(): CreateVonageCredentialDto
    {
        if (! ($this->value instanceof CreateVonageCredentialDto && $this->provider === 'vonage')) {
            throw new Exception(
                "Expected vonage; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isWebhook(): bool
    {
        return $this->value instanceof CreateWebhookCredentialDto && $this->provider === 'webhook';
    }

    /**
     * @return CreateWebhookCredentialDto
     */
    public function asWebhook(): CreateWebhookCredentialDto
    {
        if (! ($this->value instanceof CreateWebhookCredentialDto && $this->provider === 'webhook')) {
            throw new Exception(
                "Expected webhook; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCustomCredential(): bool
    {
        return $this->value instanceof CreateCustomCredentialDto && $this->provider === 'custom-credential';
    }

    /**
     * @return CreateCustomCredentialDto
     */
    public function asCustomCredential(): CreateCustomCredentialDto
    {
        if (! ($this->value instanceof CreateCustomCredentialDto && $this->provider === 'custom-credential')) {
            throw new Exception(
                "Expected custom-credential; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isXai(): bool
    {
        return $this->value instanceof CreateXAiCredentialDto && $this->provider === 'xai';
    }

    /**
     * @return CreateXAiCredentialDto
     */
    public function asXai(): CreateXAiCredentialDto
    {
        if (! ($this->value instanceof CreateXAiCredentialDto && $this->provider === 'xai')) {
            throw new Exception(
                "Expected xai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isNeuphonic(): bool
    {
        return $this->value instanceof CreateNeuphonicCredentialDto && $this->provider === 'neuphonic';
    }

    /**
     * @return CreateNeuphonicCredentialDto
     */
    public function asNeuphonic(): CreateNeuphonicCredentialDto
    {
        if (! ($this->value instanceof CreateNeuphonicCredentialDto && $this->provider === 'neuphonic')) {
            throw new Exception(
                "Expected neuphonic; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isHume(): bool
    {
        return $this->value instanceof CreateHumeCredentialDto && $this->provider === 'hume';
    }

    /**
     * @return CreateHumeCredentialDto
     */
    public function asHume(): CreateHumeCredentialDto
    {
        if (! ($this->value instanceof CreateHumeCredentialDto && $this->provider === 'hume')) {
            throw new Exception(
                "Expected hume; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMistral(): bool
    {
        return $this->value instanceof CreateMistralCredentialDto && $this->provider === 'mistral';
    }

    /**
     * @return CreateMistralCredentialDto
     */
    public function asMistral(): CreateMistralCredentialDto
    {
        if (! ($this->value instanceof CreateMistralCredentialDto && $this->provider === 'mistral')) {
            throw new Exception(
                "Expected mistral; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSpeechmatics(): bool
    {
        return $this->value instanceof CreateSpeechmaticsCredentialDto && $this->provider === 'speechmatics';
    }

    /**
     * @return CreateSpeechmaticsCredentialDto
     */
    public function asSpeechmatics(): CreateSpeechmaticsCredentialDto
    {
        if (! ($this->value instanceof CreateSpeechmaticsCredentialDto && $this->provider === 'speechmatics')) {
            throw new Exception(
                "Expected speechmatics; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTrieve(): bool
    {
        return $this->value instanceof CreateTrieveCredentialDto && $this->provider === 'trieve';
    }

    /**
     * @return CreateTrieveCredentialDto
     */
    public function asTrieve(): CreateTrieveCredentialDto
    {
        if (! ($this->value instanceof CreateTrieveCredentialDto && $this->provider === 'trieve')) {
            throw new Exception(
                "Expected trieve; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogleCalendarOauth2Client(): bool
    {
        return $this->value instanceof CreateGoogleCalendarOAuth2ClientCredentialDto && $this->provider === 'google.calendar.oauth2-client';
    }

    /**
     * @return CreateGoogleCalendarOAuth2ClientCredentialDto
     */
    public function asGoogleCalendarOauth2Client(): CreateGoogleCalendarOAuth2ClientCredentialDto
    {
        if (! ($this->value instanceof CreateGoogleCalendarOAuth2ClientCredentialDto && $this->provider === 'google.calendar.oauth2-client')) {
            throw new Exception(
                "Expected google.calendar.oauth2-client; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogleCalendarOauth2Authorization(): bool
    {
        return $this->value instanceof CreateGoogleCalendarOAuth2AuthorizationCredentialDto && $this->provider === 'google.calendar.oauth2-authorization';
    }

    /**
     * @return CreateGoogleCalendarOAuth2AuthorizationCredentialDto
     */
    public function asGoogleCalendarOauth2Authorization(): CreateGoogleCalendarOAuth2AuthorizationCredentialDto
    {
        if (! ($this->value instanceof CreateGoogleCalendarOAuth2AuthorizationCredentialDto && $this->provider === 'google.calendar.oauth2-authorization')) {
            throw new Exception(
                "Expected google.calendar.oauth2-authorization; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogleSheetsOauth2Authorization(): bool
    {
        return $this->value instanceof CreateGoogleSheetsOAuth2AuthorizationCredentialDto && $this->provider === 'google.sheets.oauth2-authorization';
    }

    /**
     * @return CreateGoogleSheetsOAuth2AuthorizationCredentialDto
     */
    public function asGoogleSheetsOauth2Authorization(): CreateGoogleSheetsOAuth2AuthorizationCredentialDto
    {
        if (! ($this->value instanceof CreateGoogleSheetsOAuth2AuthorizationCredentialDto && $this->provider === 'google.sheets.oauth2-authorization')) {
            throw new Exception(
                "Expected google.sheets.oauth2-authorization; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSlackOauth2Authorization(): bool
    {
        return $this->value instanceof CreateSlackOAuth2AuthorizationCredentialDto && $this->provider === 'slack.oauth2-authorization';
    }

    /**
     * @return CreateSlackOAuth2AuthorizationCredentialDto
     */
    public function asSlackOauth2Authorization(): CreateSlackOAuth2AuthorizationCredentialDto
    {
        if (! ($this->value instanceof CreateSlackOAuth2AuthorizationCredentialDto && $this->provider === 'slack.oauth2-authorization')) {
            throw new Exception(
                "Expected slack.oauth2-authorization; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGhlOauth2Authorization(): bool
    {
        return $this->value instanceof CreateGoHighLevelMcpCredentialDto && $this->provider === 'ghl.oauth2-authorization';
    }

    /**
     * @return CreateGoHighLevelMcpCredentialDto
     */
    public function asGhlOauth2Authorization(): CreateGoHighLevelMcpCredentialDto
    {
        if (! ($this->value instanceof CreateGoHighLevelMcpCredentialDto && $this->provider === 'ghl.oauth2-authorization')) {
            throw new Exception(
                "Expected ghl.oauth2-authorization; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isInworld(): bool
    {
        return $this->value instanceof CreateInworldCredentialDto && $this->provider === 'inworld';
    }

    /**
     * @return CreateInworldCredentialDto
     */
    public function asInworld(): CreateInworldCredentialDto
    {
        if (! ($this->value instanceof CreateInworldCredentialDto && $this->provider === 'inworld')) {
            throw new Exception(
                "Expected inworld; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMinimax(): bool
    {
        return $this->value instanceof CreateMinimaxCredentialDto && $this->provider === 'minimax';
    }

    /**
     * @return CreateMinimaxCredentialDto
     */
    public function asMinimax(): CreateMinimaxCredentialDto
    {
        if (! ($this->value instanceof CreateMinimaxCredentialDto && $this->provider === 'minimax')) {
            throw new Exception(
                "Expected minimax; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['provider'] = $this->provider;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->provider) {
            case '11labs':
                $value = $this->as_11Labs()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'anthropic':
                $value = $this->asAnthropic()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'anyscale':
                $value = $this->asAnyscale()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'assembly-ai':
                $value = $this->asAssemblyAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'azure-openai':
                $value = $this->asAzureOpenai()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'azure':
                $value = $this->asAzure()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'byo-sip-trunk':
                $value = $this->asByoSipTrunk()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'cartesia':
                $value = $this->asCartesia()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'cerebras':
                $value = $this->asCerebras()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'cloudflare':
                $value = $this->asCloudflare()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'custom-llm':
                $value = $this->asCustomLlm()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'deepgram':
                $value = $this->asDeepgram()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'deepinfra':
                $value = $this->asDeepinfra()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'deep-seek':
                $value = $this->asDeepSeek()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gcp':
                $value = $this->asGcp()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gladia':
                $value = $this->asGladia()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gohighlevel':
                $value = $this->asGohighlevel()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google':
                $value = $this->asGoogle()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'groq':
                $value = $this->asGroq()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'inflection-ai':
                $value = $this->asInflectionAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'langfuse':
                $value = $this->asLangfuse()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'lmnt':
                $value = $this->asLmnt()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'make':
                $value = $this->asMake()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'openai':
                $value = $this->asOpenai()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'openrouter':
                $value = $this->asOpenrouter()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'perplexity-ai':
                $value = $this->asPerplexityAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'playht':
                $value = $this->asPlayht()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'rime-ai':
                $value = $this->asRimeAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'runpod':
                $value = $this->asRunpod()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 's3':
                $value = $this->asS3()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'supabase':
                $value = $this->asSupabase()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'smallest-ai':
                $value = $this->asSmallestAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'tavus':
                $value = $this->asTavus()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'together-ai':
                $value = $this->asTogetherAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'twilio':
                $value = $this->asTwilio()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'vonage':
                $value = $this->asVonage()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'webhook':
                $value = $this->asWebhook()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'custom-credential':
                $value = $this->asCustomCredential()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'xai':
                $value = $this->asXai()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'neuphonic':
                $value = $this->asNeuphonic()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'hume':
                $value = $this->asHume()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'mistral':
                $value = $this->asMistral()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'speechmatics':
                $value = $this->asSpeechmatics()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'trieve':
                $value = $this->asTrieve()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google.calendar.oauth2-client':
                $value = $this->asGoogleCalendarOauth2Client()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google.calendar.oauth2-authorization':
                $value = $this->asGoogleCalendarOauth2Authorization()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google.sheets.oauth2-authorization':
                $value = $this->asGoogleSheetsOauth2Authorization()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'slack.oauth2-authorization':
                $value = $this->asSlackOauth2Authorization()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'ghl.oauth2-authorization':
                $value = $this->asGhlOauth2Authorization()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'inworld':
                $value = $this->asInworld()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'minimax':
                $value = $this->asMinimax()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param string $json
     */
    public static function fromJson(string $json): static
    {
        $decodedJson = JsonDecoder::decode($json);
        if (! is_array($decodedJson)) {
            throw new Exception("Unexpected non-array decoded type: " . gettype($decodedJson));
        }

        return self::jsonDeserialize($decodedJson);
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (! array_key_exists('provider', $data)) {
            throw new Exception(
                "JSON data is missing property 'provider'",
            );
        }
        $provider = $data['provider'];
        if (! (is_string($provider))) {
            throw new Exception(
                "Expected property 'provider' in JSON data to be string, instead received " . get_debug_type($data['provider']),
            );
        }

        $args['provider'] = $provider;
        switch ($provider) {
            case '11labs':
                $args['value'] = CreateElevenLabsCredentialDto::jsonDeserialize($data);
                break;
            case 'anthropic':
                $args['value'] = CreateAnthropicCredentialDto::jsonDeserialize($data);
                break;
            case 'anyscale':
                $args['value'] = CreateAnyscaleCredentialDto::jsonDeserialize($data);
                break;
            case 'assembly-ai':
                $args['value'] = CreateAssemblyAiCredentialDto::jsonDeserialize($data);
                break;
            case 'azure-openai':
                $args['value'] = CreateAzureOpenAiCredentialDto::jsonDeserialize($data);
                break;
            case 'azure':
                $args['value'] = CreateAzureCredentialDto::jsonDeserialize($data);
                break;
            case 'byo-sip-trunk':
                $args['value'] = CreateByoSipTrunkCredentialDto::jsonDeserialize($data);
                break;
            case 'cartesia':
                $args['value'] = CreateCartesiaCredentialDto::jsonDeserialize($data);
                break;
            case 'cerebras':
                $args['value'] = CreateCerebrasCredentialDto::jsonDeserialize($data);
                break;
            case 'cloudflare':
                $args['value'] = CreateCloudflareCredentialDto::jsonDeserialize($data);
                break;
            case 'custom-llm':
                $args['value'] = CreateCustomLlmCredentialDto::jsonDeserialize($data);
                break;
            case 'deepgram':
                $args['value'] = CreateDeepgramCredentialDto::jsonDeserialize($data);
                break;
            case 'deepinfra':
                $args['value'] = CreateDeepInfraCredentialDto::jsonDeserialize($data);
                break;
            case 'deep-seek':
                $args['value'] = CreateDeepSeekCredentialDto::jsonDeserialize($data);
                break;
            case 'gcp':
                $args['value'] = CreateGcpCredentialDto::jsonDeserialize($data);
                break;
            case 'gladia':
                $args['value'] = CreateGladiaCredentialDto::jsonDeserialize($data);
                break;
            case 'gohighlevel':
                $args['value'] = CreateGoHighLevelCredentialDto::jsonDeserialize($data);
                break;
            case 'google':
                $args['value'] = CreateGoogleCredentialDto::jsonDeserialize($data);
                break;
            case 'groq':
                $args['value'] = CreateGroqCredentialDto::jsonDeserialize($data);
                break;
            case 'inflection-ai':
                $args['value'] = CreateInflectionAiCredentialDto::jsonDeserialize($data);
                break;
            case 'langfuse':
                $args['value'] = CreateLangfuseCredentialDto::jsonDeserialize($data);
                break;
            case 'lmnt':
                $args['value'] = CreateLmntCredentialDto::jsonDeserialize($data);
                break;
            case 'make':
                $args['value'] = CreateMakeCredentialDto::jsonDeserialize($data);
                break;
            case 'openai':
                $args['value'] = CreateOpenAiCredentialDto::jsonDeserialize($data);
                break;
            case 'openrouter':
                $args['value'] = CreateOpenRouterCredentialDto::jsonDeserialize($data);
                break;
            case 'perplexity-ai':
                $args['value'] = CreatePerplexityAiCredentialDto::jsonDeserialize($data);
                break;
            case 'playht':
                $args['value'] = CreatePlayHtCredentialDto::jsonDeserialize($data);
                break;
            case 'rime-ai':
                $args['value'] = CreateRimeAiCredentialDto::jsonDeserialize($data);
                break;
            case 'runpod':
                $args['value'] = CreateRunpodCredentialDto::jsonDeserialize($data);
                break;
            case 's3':
                $args['value'] = CreateS3CredentialDto::jsonDeserialize($data);
                break;
            case 'supabase':
                $args['value'] = CreateSupabaseCredentialDto::jsonDeserialize($data);
                break;
            case 'smallest-ai':
                $args['value'] = CreateSmallestAiCredentialDto::jsonDeserialize($data);
                break;
            case 'tavus':
                $args['value'] = CreateTavusCredentialDto::jsonDeserialize($data);
                break;
            case 'together-ai':
                $args['value'] = CreateTogetherAiCredentialDto::jsonDeserialize($data);
                break;
            case 'twilio':
                $args['value'] = CreateTwilioCredentialDto::jsonDeserialize($data);
                break;
            case 'vonage':
                $args['value'] = CreateVonageCredentialDto::jsonDeserialize($data);
                break;
            case 'webhook':
                $args['value'] = CreateWebhookCredentialDto::jsonDeserialize($data);
                break;
            case 'custom-credential':
                $args['value'] = CreateCustomCredentialDto::jsonDeserialize($data);
                break;
            case 'xai':
                $args['value'] = CreateXAiCredentialDto::jsonDeserialize($data);
                break;
            case 'neuphonic':
                $args['value'] = CreateNeuphonicCredentialDto::jsonDeserialize($data);
                break;
            case 'hume':
                $args['value'] = CreateHumeCredentialDto::jsonDeserialize($data);
                break;
            case 'mistral':
                $args['value'] = CreateMistralCredentialDto::jsonDeserialize($data);
                break;
            case 'speechmatics':
                $args['value'] = CreateSpeechmaticsCredentialDto::jsonDeserialize($data);
                break;
            case 'trieve':
                $args['value'] = CreateTrieveCredentialDto::jsonDeserialize($data);
                break;
            case 'google.calendar.oauth2-client':
                $args['value'] = CreateGoogleCalendarOAuth2ClientCredentialDto::jsonDeserialize($data);
                break;
            case 'google.calendar.oauth2-authorization':
                $args['value'] = CreateGoogleCalendarOAuth2AuthorizationCredentialDto::jsonDeserialize($data);
                break;
            case 'google.sheets.oauth2-authorization':
                $args['value'] = CreateGoogleSheetsOAuth2AuthorizationCredentialDto::jsonDeserialize($data);
                break;
            case 'slack.oauth2-authorization':
                $args['value'] = CreateSlackOAuth2AuthorizationCredentialDto::jsonDeserialize($data);
                break;
            case 'ghl.oauth2-authorization':
                $args['value'] = CreateGoHighLevelMcpCredentialDto::jsonDeserialize($data);
                break;
            case 'inworld':
                $args['value'] = CreateInworldCredentialDto::jsonDeserialize($data);
                break;
            case 'minimax':
                $args['value'] = CreateMinimaxCredentialDto::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['provider'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
