<?php
declare(strict_types=1);

namespace Carbon\PaperTiger\Telegram\Action;

use Neos\Flow\Mvc\ActionResponse;
use Neos\Fusion\Form\Runtime\Action\AbstractAction;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\ServerRequest;
use Neos\Fusion\Form\Runtime\Domain\Exception\ActionException;


class SendMessageAction extends AbstractAction
{
    /**
     * @return ActionResponse|null
     */
    public function perform(): ?ActionResponse
    {
        $apiUrl = $this->options['apiUrl'] ?? null;
        $apiKey = $this->options['apiKey'] ?? null;
        $chatId = $this->options['chatId'] ?? null;
        $apiUrl = $this->options['apiUrl'] ?? null;
        $text = $this->options['text'] ?? null;
        $requestOptions = $this->options['requestOptions'] ?? [];

        if (!$apiUrl || !$apiKey || !$chatId || !$text) {
            throw new ActionException('Missing required options');
        }
        // Replace br with new lines
        $text = preg_replace('/<br\W*?\/?>/', "\n", $text);
        // Replace &nbsp; with spaces
        $text = str_replace('&nbsp;', ' ', $text);

        $url = sprintf('%s/bot%s/sendmessage', $apiUrl, $apiKey);
        $options = [
            ...$requestOptions,
            'chat_id' => $chatId,
            'text' => $text,
        ];

        $client = new Client();
        $request = new ServerRequest(
            'POST',
            $url,
            [
                'Content-Type' => 'application/json; charset=utf-8',
            ],
            json_encode($options)
        );
        $response = $client->sendRequest($request);
        $result = json_decode($response->getBody()->getContents());

        if ($result->ok !== true) {
            throw new ActionException('Telegram API error: ' . $result->description);
        }

        return null;
    }
}
