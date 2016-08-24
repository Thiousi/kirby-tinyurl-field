# Kirby TinyURL field
![Version](https://img.shields.io/badge/version-1.1.0-green.svg) ![License](https://img.shields.io/badge/license-MIT-green.svg) ![Kirby Version](https://img.shields.io/badge/kirby-2.3%2B-red.svg)

A tiny field that displays the tinyURL of a page in the panel for [Kirby](http://getkirby.com)

![Kirby Tiny URL](https://github.com/Thiousi/kirby-tinyurl-field/blob/master/screenshot.png)

## Installation

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following command in your shell from the root folder of your Kirby installation:

```
kirby plugin:install thiousi/kirby-tinyurl-field
```

### 2. Manual
Download this archive, extract it and rename it to `tinyurl`. Copy the folder to your `site/fields` folder.

### 3. Git Submodule
If you know your way around git, you can download this as a submodule:

```
git submodule add https://github.com/Thiousi/kirby-tinyurl-field/ site/fields/tinyurl/
```

## Usage
In  your blueprint:

```
  tinyurl:
    label: Tiny URL
    type: tinyurl
    help: Click on field to copy to clipboard
    width: 1/2
```

The field supports the standard options:

```
- Help
- Width
```

You can also internationalize the label the same way you would with any other fields.

## To-do
- [X] Copy to clipboard on click

## License
MIT

## Changelog
1.0.0 - Initial release
1.1.0 - Added copy to clipboard with [clipboard.js](https://clipboardjs.com/)
