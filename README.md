# Transclude (for ExpressionEngine)

Tranclude a file into your template. Useful for when you want to include an
inline SVG file or inline CSS.

## A note about support

While we have incentive to keep this project working because we use it
frequently, we are not always available to provide support for the Transclude
plugin. We therefore offer it to you, free of charge, but with no guarantee of
support. Find something that's not working? Or could be improved? By all
means, fix it! Submit a pull request, and we'll pull it into the project so
everyone can benefit. But please, no hard feelings if we can't help you when
it's not working. Go forth and Open Source.

## Requirements

* EE 2.0
* PHP 5 >= 5.3

## Installation

1. Copy the "transclude" folder to ExpressionEngine's third-party add-ons
directory. (e.g. `/system/expressionengine/third_party/`)

## Usage

```
<div class="logo">
  {exp:transclude url="/assets/images/logo.svg"}
</div>
```

## Parameters

`url`: the file to transclude. The file path is relative to the document root.
