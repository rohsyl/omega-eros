@php
    use rohsyl\OmegaCore\Utils\Overt\Facades\Entity;
    use rohsyl\OmegaCore\Utils\Common\Facades\OmegaUtils;
@endphp
<!DOCTYPE HTML>

<html lang="{{ Entity::LocaleSlug() }}">
<head>

    <title>{{ Entity::Site()->name }} - {{ Entity::Page()->title }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {!! OmegaUtils::renderMeta() !!}

    <!-- OmegaCMS assets -->
    {!! OmegaUtils::renderOmegaAssets() !!}

    <!-- Styles -->
    <link href="{{ theme_asset('css/main.css') }}" rel="stylesheet"/>

    <!-- Scripts -->

    <script src="{{ theme_asset('js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ theme_asset('js/skel.min.js') }}"></script>
    <script src="{{ theme_asset('js/util.js') }}"></script>
    <script src="{{ theme_asset('js/main.js') }}"></script>

    {!! OmegaUtils::renderDependencies() !!}
</head>
