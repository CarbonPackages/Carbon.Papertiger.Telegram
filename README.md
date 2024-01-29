[![Latest stable version]][packagist] [![Total downloads]][packagist] [![License]][packagist] [![GitHub forks]][fork] [![GitHub stars]][stargazers] [![GitHub watchers]][subscription]

# Carbon.Papertiger.Telegram for Sitegeitst.PaperTiger

This enables [Sitegeitst.PaperTiger](https://packagist.org/packages/sitegeist/papertiger) to send message to [Telegram](https://telegram.org).


## Installation

`Carbon.Papertiger.Telegram` is available via packagist.
Run the following command in your site package

```bash
composer require --no-update carbon/papertiger-telegram
```

Then run `composer update` in your project root.

## Settings

These are the default settings:

```yaml
Carbon:
  PaperTiger:
    Telegram:
      allowableTags: '<b><strong><i><em><u><ins><s><del><strike><a><tg-spoiler><tg-emoji><code><pre><blockquote><br>'
      apiUrl: 'https://api.telegram.org'
      apiKey: null
      chatId: null
      requestOptions:
        disable_web_page_preview: false
        parse_mode: HTML
```

With `apiKey` and `chatId` you can set default values for the needed properties. If they are set, the will not be shown in the Neos backend

[packagist]: https://packagist.org/packages/carbon/papertiger-telegram
[latest stable version]: https://poser.pugx.org/carbon/papertiger-telegram/v/stable
[total downloads]: https://poser.pugx.org/carbon/papertiger-telegram/downloads
[license]: https://poser.pugx.org/carbon/papertiger-telegram/license
[github forks]: https://img.shields.io/github/forks/CarbonPackages/Carbon.Papertiger.Telegram.svg?style=social&label=Fork
[github stars]: https://img.shields.io/github/stars/CarbonPackages/Carbon.Papertiger.Telegram.svg?style=social&label=Stars
[github watchers]: https://img.shields.io/github/watchers/CarbonPackages/Carbon.Papertiger.Telegram.svg?style=social&label=Watch
[fork]: https://github.com/CarbonPackages/Carbon.Papertiger.Telegram/fork
[stargazers]: https://github.com/CarbonPackages/Carbon.Papertiger.Telegram/stargazers
[subscription]: https://github.com/CarbonPackages/Carbon.Papertiger.Telegram/subscription
