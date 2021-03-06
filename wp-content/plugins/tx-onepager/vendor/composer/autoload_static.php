<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf7c9438001e917b1192a4176c04e05a
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '8cd2fca4db21bffce1ad0612f7caeec4' => __DIR__ . '/..' . '/ramsey/array_column/src/array_column.php',
        'ce89ac35a6c330c55f4710717db9ff78' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'ThemeXpert\\' => 11,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\HttpFoundation\\' => 33,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ThemeXpert\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'A' => 
        array (
            'Assetic' => 
            array (
                0 => __DIR__ . '/..' . '/kriswallsmith/assetic/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Api\\Controllers\\ApiController' => __DIR__ . '/../..' . '/app/Api/Controllers/ApiController.php',
        'App\\Api\\Controllers\\BlocksApiController' => __DIR__ . '/../..' . '/app/Api/Controllers/BlocksApiController.php',
        'App\\Api\\Controllers\\MenuApiController' => __DIR__ . '/../..' . '/app/Api/Controllers/MenuApiController.php',
        'App\\Api\\Controllers\\OptionsApiController' => __DIR__ . '/../..' . '/app/Api/Controllers/OptionsApiController.php',
        'App\\Api\\Controllers\\PageApiController' => __DIR__ . '/../..' . '/app/Api/Controllers/PageApiController.php',
        'App\\Api\\Controllers\\SectionsApiController' => __DIR__ . '/../..' . '/app/Api/Controllers/SectionsApiController.php',
        'App\\Application' => __DIR__ . '/../..' . '/app/Application.php',
        'App\\Assets\\BlocksScripts' => __DIR__ . '/../..' . '/app/Assets/BlocksScripts.php',
        'App\\Assets\\BuildModeScripts' => __DIR__ . '/../..' . '/app/Assets/BuildModeScripts.php',
        'App\\Assets\\OnepageScripts' => __DIR__ . '/../..' . '/app/Assets/OnepageScripts.php',
        'App\\Assets\\OptionsPanelScripts' => __DIR__ . '/../..' . '/app/Assets/OptionsPanelScripts.php',
        'App\\Assets\\PreviewScripts' => __DIR__ . '/../..' . '/app/Assets/PreviewScripts.php',
        'App\\Assets\\Traits\\FormEngineScripts' => __DIR__ . '/../..' . '/app/Assets/Traits/FormEngineScripts.php',
        'App\\Assets\\WpConflictResolver' => __DIR__ . '/../..' . '/app/Assets/WpConflictResolver.php',
        'App\\Content\\OnepageContent' => __DIR__ . '/../..' . '/app/Content/OnepageContent.php',
        'App\\Content\\OnepageInternalScripts' => __DIR__ . '/../..' . '/app/Content/OnepageInternalScripts.php',
        'App\\Content\\OnepageToolbar' => __DIR__ . '/../..' . '/app/Content/OnepageToolbar.php',
        'App\\Loaders\\BlocksLoader' => __DIR__ . '/../..' . '/app/Loaders/BlocksLoader.php',
        'App\\Loaders\\PresetsLoader' => __DIR__ . '/../..' . '/app/Loaders/PresetsLoader.php',
        'App\\Loaders\\TemplateLoader' => __DIR__ . '/../..' . '/app/Loaders/TemplateLoader.php',
        'Appsero\\Client' => __DIR__ . '/..' . '/appsero/client/src/Client.php',
        'Appsero\\Insights' => __DIR__ . '/..' . '/appsero/client/src/Insights.php',
        'Appsero\\License' => __DIR__ . '/..' . '/appsero/client/src/License.php',
        'Appsero\\Updater' => __DIR__ . '/..' . '/appsero/client/src/Updater.php',
        'Assetic\\AssetManager' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/AssetManager.php',
        'Assetic\\AssetWriter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/AssetWriter.php',
        'Assetic\\Asset\\AssetCache' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/AssetCache.php',
        'Assetic\\Asset\\AssetCollection' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/AssetCollection.php',
        'Assetic\\Asset\\AssetCollectionInterface' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/AssetCollectionInterface.php',
        'Assetic\\Asset\\AssetInterface' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/AssetInterface.php',
        'Assetic\\Asset\\AssetReference' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/AssetReference.php',
        'Assetic\\Asset\\BaseAsset' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/BaseAsset.php',
        'Assetic\\Asset\\FileAsset' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/FileAsset.php',
        'Assetic\\Asset\\GlobAsset' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/GlobAsset.php',
        'Assetic\\Asset\\HttpAsset' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/HttpAsset.php',
        'Assetic\\Asset\\Iterator\\AssetCollectionFilterIterator' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/Iterator/AssetCollectionFilterIterator.php',
        'Assetic\\Asset\\Iterator\\AssetCollectionIterator' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/Iterator/AssetCollectionIterator.php',
        'Assetic\\Asset\\StringAsset' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Asset/StringAsset.php',
        'Assetic\\Cache\\ApcCache' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Cache/ApcCache.php',
        'Assetic\\Cache\\ArrayCache' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Cache/ArrayCache.php',
        'Assetic\\Cache\\CacheInterface' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Cache/CacheInterface.php',
        'Assetic\\Cache\\ConfigCache' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Cache/ConfigCache.php',
        'Assetic\\Cache\\ExpiringCache' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Cache/ExpiringCache.php',
        'Assetic\\Cache\\FilesystemCache' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Cache/FilesystemCache.php',
        'Assetic\\Exception\\Exception' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Exception/Exception.php',
        'Assetic\\Exception\\FilterException' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Exception/FilterException.php',
        'Assetic\\Extension\\Twig\\AsseticExtension' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Extension/Twig/AsseticExtension.php',
        'Assetic\\Extension\\Twig\\AsseticFilterFunction' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Extension/Twig/AsseticFilterFunction.php',
        'Assetic\\Extension\\Twig\\AsseticFilterInvoker' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Extension/Twig/AsseticFilterInvoker.php',
        'Assetic\\Extension\\Twig\\AsseticFilterNode' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Extension/Twig/AsseticFilterNode.php',
        'Assetic\\Extension\\Twig\\AsseticNode' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Extension/Twig/AsseticNode.php',
        'Assetic\\Extension\\Twig\\AsseticTokenParser' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Extension/Twig/AsseticTokenParser.php',
        'Assetic\\Extension\\Twig\\TwigFormulaLoader' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Extension/Twig/TwigFormulaLoader.php',
        'Assetic\\Extension\\Twig\\TwigResource' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Extension/Twig/TwigResource.php',
        'Assetic\\Extension\\Twig\\ValueContainer' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Extension/Twig/ValueContainer.php',
        'Assetic\\Factory\\AssetFactory' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/AssetFactory.php',
        'Assetic\\Factory\\LazyAssetManager' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/LazyAssetManager.php',
        'Assetic\\Factory\\Loader\\BasePhpFormulaLoader' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Loader/BasePhpFormulaLoader.php',
        'Assetic\\Factory\\Loader\\CachedFormulaLoader' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Loader/CachedFormulaLoader.php',
        'Assetic\\Factory\\Loader\\FormulaLoaderInterface' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Loader/FormulaLoaderInterface.php',
        'Assetic\\Factory\\Loader\\FunctionCallsFormulaLoader' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Loader/FunctionCallsFormulaLoader.php',
        'Assetic\\Factory\\Resource\\CoalescingDirectoryResource' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Resource/CoalescingDirectoryResource.php',
        'Assetic\\Factory\\Resource\\DirectoryResource' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Resource/DirectoryResource.php',
        'Assetic\\Factory\\Resource\\DirectoryResourceFilterIterator' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Resource/DirectoryResource.php',
        'Assetic\\Factory\\Resource\\DirectoryResourceIterator' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Resource/DirectoryResource.php',
        'Assetic\\Factory\\Resource\\FileResource' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Resource/FileResource.php',
        'Assetic\\Factory\\Resource\\IteratorResourceInterface' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Resource/IteratorResourceInterface.php',
        'Assetic\\Factory\\Resource\\ResourceInterface' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Resource/ResourceInterface.php',
        'Assetic\\Factory\\Worker\\CacheBustingWorker' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Worker/CacheBustingWorker.php',
        'Assetic\\Factory\\Worker\\EnsureFilterWorker' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Worker/EnsureFilterWorker.php',
        'Assetic\\Factory\\Worker\\WorkerInterface' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Factory/Worker/WorkerInterface.php',
        'Assetic\\FilterManager' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/FilterManager.php',
        'Assetic\\Filter\\AutoprefixerFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/AutoprefixerFilter.php',
        'Assetic\\Filter\\BaseCssFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/BaseCssFilter.php',
        'Assetic\\Filter\\BaseNodeFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/BaseNodeFilter.php',
        'Assetic\\Filter\\BaseProcessFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/BaseProcessFilter.php',
        'Assetic\\Filter\\CallablesFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/CallablesFilter.php',
        'Assetic\\Filter\\CleanCssFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/CleanCssFilter.php',
        'Assetic\\Filter\\CoffeeScriptFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/CoffeeScriptFilter.php',
        'Assetic\\Filter\\CompassFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/CompassFilter.php',
        'Assetic\\Filter\\CssCacheBustingFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/CssCacheBustingFilter.php',
        'Assetic\\Filter\\CssEmbedFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/CssEmbedFilter.php',
        'Assetic\\Filter\\CssImportFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/CssImportFilter.php',
        'Assetic\\Filter\\CssMinFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/CssMinFilter.php',
        'Assetic\\Filter\\CssRewriteFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/CssRewriteFilter.php',
        'Assetic\\Filter\\DartFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/DartFilter.php',
        'Assetic\\Filter\\DependencyExtractorInterface' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/DependencyExtractorInterface.php',
        'Assetic\\Filter\\EmberPrecompileFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/EmberPrecompileFilter.php',
        'Assetic\\Filter\\FilterCollection' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/FilterCollection.php',
        'Assetic\\Filter\\FilterInterface' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/FilterInterface.php',
        'Assetic\\Filter\\GoogleClosure\\BaseCompilerFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/GoogleClosure/BaseCompilerFilter.php',
        'Assetic\\Filter\\GoogleClosure\\CompilerApiFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/GoogleClosure/CompilerApiFilter.php',
        'Assetic\\Filter\\GoogleClosure\\CompilerJarFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/GoogleClosure/CompilerJarFilter.php',
        'Assetic\\Filter\\GssFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/GssFilter.php',
        'Assetic\\Filter\\HandlebarsFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/HandlebarsFilter.php',
        'Assetic\\Filter\\HashableInterface' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/HashableInterface.php',
        'Assetic\\Filter\\JSMinFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/JSMinFilter.php',
        'Assetic\\Filter\\JSMinPlusFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/JSMinPlusFilter.php',
        'Assetic\\Filter\\JSqueezeFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/JSqueezeFilter.php',
        'Assetic\\Filter\\JpegoptimFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/JpegoptimFilter.php',
        'Assetic\\Filter\\JpegtranFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/JpegtranFilter.php',
        'Assetic\\Filter\\LessFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/LessFilter.php',
        'Assetic\\Filter\\LessphpFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/LessphpFilter.php',
        'Assetic\\Filter\\MinifyCssCompressorFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/MinifyCssCompressorFilter.php',
        'Assetic\\Filter\\OptiPngFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/OptiPngFilter.php',
        'Assetic\\Filter\\PackagerFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/PackagerFilter.php',
        'Assetic\\Filter\\PackerFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/PackerFilter.php',
        'Assetic\\Filter\\PhpCssEmbedFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/PhpCssEmbedFilter.php',
        'Assetic\\Filter\\PngoutFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/PngoutFilter.php',
        'Assetic\\Filter\\ReactJsxFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/ReactJsxFilter.php',
        'Assetic\\Filter\\RooleFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/RooleFilter.php',
        'Assetic\\Filter\\Sass\\BaseSassFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/Sass/BaseSassFilter.php',
        'Assetic\\Filter\\Sass\\SassFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/Sass/SassFilter.php',
        'Assetic\\Filter\\Sass\\ScssFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/Sass/ScssFilter.php',
        'Assetic\\Filter\\SassphpFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/SassphpFilter.php',
        'Assetic\\Filter\\ScssphpFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/ScssphpFilter.php',
        'Assetic\\Filter\\SeparatorFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/SeparatorFilter.php',
        'Assetic\\Filter\\SprocketsFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/SprocketsFilter.php',
        'Assetic\\Filter\\StylusFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/StylusFilter.php',
        'Assetic\\Filter\\TypeScriptFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/TypeScriptFilter.php',
        'Assetic\\Filter\\UglifyCssFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/UglifyCssFilter.php',
        'Assetic\\Filter\\UglifyJs2Filter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/UglifyJs2Filter.php',
        'Assetic\\Filter\\UglifyJsFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/UglifyJsFilter.php',
        'Assetic\\Filter\\Yui\\BaseCompressorFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/Yui/BaseCompressorFilter.php',
        'Assetic\\Filter\\Yui\\CssCompressorFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/Yui/CssCompressorFilter.php',
        'Assetic\\Filter\\Yui\\JsCompressorFilter' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Filter/Yui/JsCompressorFilter.php',
        'Assetic\\Util\\CssUtils' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Util/CssUtils.php',
        'Assetic\\Util\\FilesystemUtils' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Util/FilesystemUtils.php',
        'Assetic\\Util\\LessUtils' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Util/LessUtils.php',
        'Assetic\\Util\\SassUtils' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Util/SassUtils.php',
        'Assetic\\Util\\TraversableString' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Util/TraversableString.php',
        'Assetic\\Util\\VarUtils' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/Util/VarUtils.php',
        'Assetic\\ValueSupplierInterface' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/Assetic/ValueSupplierInterface.php',
        'Pimple\\Container' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Container.php',
        'Pimple\\Exception\\ExpectedInvokableException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/ExpectedInvokableException.php',
        'Pimple\\Exception\\FrozenServiceException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/FrozenServiceException.php',
        'Pimple\\Exception\\InvalidServiceIdentifierException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/InvalidServiceIdentifierException.php',
        'Pimple\\Exception\\UnknownIdentifierException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/UnknownIdentifierException.php',
        'Pimple\\Psr11\\Container' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Psr11/Container.php',
        'Pimple\\Psr11\\ServiceLocator' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Psr11/ServiceLocator.php',
        'Pimple\\ServiceIterator' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/ServiceIterator.php',
        'Pimple\\ServiceProviderInterface' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/ServiceProviderInterface.php',
        'Pimple\\Tests\\Fixtures\\Invokable' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/Invokable.php',
        'Pimple\\Tests\\Fixtures\\NonInvokable' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/NonInvokable.php',
        'Pimple\\Tests\\Fixtures\\PimpleServiceProvider' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/PimpleServiceProvider.php',
        'Pimple\\Tests\\Fixtures\\Service' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/Service.php',
        'Pimple\\Tests\\PimpleServiceProviderInterfaceTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/PimpleServiceProviderInterfaceTest.php',
        'Pimple\\Tests\\PimpleTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/PimpleTest.php',
        'Pimple\\Tests\\Psr11\\ContainerTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Psr11/ContainerTest.php',
        'Pimple\\Tests\\Psr11\\ServiceLocatorTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Psr11/ServiceLocatorTest.php',
        'Pimple\\Tests\\ServiceIteratorTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/ServiceIteratorTest.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Resources/stubs/SessionHandlerInterface.php',
        'Symfony\\Component\\HttpFoundation\\AcceptHeader' => __DIR__ . '/..' . '/symfony/http-foundation/AcceptHeader.php',
        'Symfony\\Component\\HttpFoundation\\AcceptHeaderItem' => __DIR__ . '/..' . '/symfony/http-foundation/AcceptHeaderItem.php',
        'Symfony\\Component\\HttpFoundation\\ApacheRequest' => __DIR__ . '/..' . '/symfony/http-foundation/ApacheRequest.php',
        'Symfony\\Component\\HttpFoundation\\BinaryFileResponse' => __DIR__ . '/..' . '/symfony/http-foundation/BinaryFileResponse.php',
        'Symfony\\Component\\HttpFoundation\\Cookie' => __DIR__ . '/..' . '/symfony/http-foundation/Cookie.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/ConflictingHeadersException.php',
        'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/ExpressionRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\FileBag' => __DIR__ . '/..' . '/symfony/http-foundation/FileBag.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/AccessDeniedException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/FileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/FileNotFoundException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\UnexpectedTypeException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/UnexpectedTypeException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\UploadException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/UploadException.php',
        'Symfony\\Component\\HttpFoundation\\File\\File' => __DIR__ . '/..' . '/symfony/http-foundation/File/File.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/ExtensionGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesserInterface' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/ExtensionGuesserInterface.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\FileBinaryMimeTypeGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\FileinfoMimeTypeGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeExtensionGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/MimeTypeExtensionGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/MimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php',
        'Symfony\\Component\\HttpFoundation\\File\\UploadedFile' => __DIR__ . '/..' . '/symfony/http-foundation/File/UploadedFile.php',
        'Symfony\\Component\\HttpFoundation\\HeaderBag' => __DIR__ . '/..' . '/symfony/http-foundation/HeaderBag.php',
        'Symfony\\Component\\HttpFoundation\\IpUtils' => __DIR__ . '/..' . '/symfony/http-foundation/IpUtils.php',
        'Symfony\\Component\\HttpFoundation\\JsonResponse' => __DIR__ . '/..' . '/symfony/http-foundation/JsonResponse.php',
        'Symfony\\Component\\HttpFoundation\\ParameterBag' => __DIR__ . '/..' . '/symfony/http-foundation/ParameterBag.php',
        'Symfony\\Component\\HttpFoundation\\RedirectResponse' => __DIR__ . '/..' . '/symfony/http-foundation/RedirectResponse.php',
        'Symfony\\Component\\HttpFoundation\\Request' => __DIR__ . '/..' . '/symfony/http-foundation/Request.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcherInterface' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcherInterface.php',
        'Symfony\\Component\\HttpFoundation\\RequestStack' => __DIR__ . '/..' . '/symfony/http-foundation/RequestStack.php',
        'Symfony\\Component\\HttpFoundation\\Response' => __DIR__ . '/..' . '/symfony/http-foundation/Response.php',
        'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag' => __DIR__ . '/..' . '/symfony/http-foundation/ResponseHeaderBag.php',
        'Symfony\\Component\\HttpFoundation\\ServerBag' => __DIR__ . '/..' . '/symfony/http-foundation/ServerBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Attribute/AttributeBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\NamespacedAttributeBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/FlashBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/FlashBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Session' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Session.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\LegacyPdoSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/LegacyPdoSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcacheSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MemcacheSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcachedSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MongoDbSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/NativeSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NullSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\PdoSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/PdoSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/WriteCheckSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MetadataBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/NativeSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\AbstractProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\NativeProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Proxy/NativeProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\SessionHandlerProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/SessionStorageInterface.php',
        'Symfony\\Component\\HttpFoundation\\StreamedResponse' => __DIR__ . '/..' . '/symfony/http-foundation/StreamedResponse.php',
        'Symfony\\Component\\Process\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/process/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Process\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/process/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Process\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/process/Exception/LogicException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessFailedException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessFailedException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessTimedOutException.php',
        'Symfony\\Component\\Process\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/process/Exception/RuntimeException.php',
        'Symfony\\Component\\Process\\ExecutableFinder' => __DIR__ . '/..' . '/symfony/process/ExecutableFinder.php',
        'Symfony\\Component\\Process\\InputStream' => __DIR__ . '/..' . '/symfony/process/InputStream.php',
        'Symfony\\Component\\Process\\PhpExecutableFinder' => __DIR__ . '/..' . '/symfony/process/PhpExecutableFinder.php',
        'Symfony\\Component\\Process\\PhpProcess' => __DIR__ . '/..' . '/symfony/process/PhpProcess.php',
        'Symfony\\Component\\Process\\Pipes\\AbstractPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/AbstractPipes.php',
        'Symfony\\Component\\Process\\Pipes\\PipesInterface' => __DIR__ . '/..' . '/symfony/process/Pipes/PipesInterface.php',
        'Symfony\\Component\\Process\\Pipes\\UnixPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/UnixPipes.php',
        'Symfony\\Component\\Process\\Pipes\\WindowsPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/WindowsPipes.php',
        'Symfony\\Component\\Process\\Process' => __DIR__ . '/..' . '/symfony/process/Process.php',
        'Symfony\\Component\\Process\\ProcessBuilder' => __DIR__ . '/..' . '/symfony/process/ProcessBuilder.php',
        'Symfony\\Component\\Process\\ProcessUtils' => __DIR__ . '/..' . '/symfony/process/ProcessUtils.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'ThemeXpert\\Asset\\AssetsCompiler' => __DIR__ . '/../..' . '/src/Asset/AssetsCompiler.php',
        'ThemeXpert\\Asset\\CssRewriteFilter' => __DIR__ . '/../..' . '/src/Asset/CssRewriteFilter.php',
        'ThemeXpert\\FileSystem\\FileSystem' => __DIR__ . '/../..' . '/src/FileSystem/FileSystem.php',
        'ThemeXpert\\Onepager\\Adapters\\AdapterInterface' => __DIR__ . '/../..' . '/src/Onepager/Adapters/AdapterInterface.php',
        'ThemeXpert\\Onepager\\Adapters\\BaseAdapter' => __DIR__ . '/../..' . '/src/Onepager/Adapters/BaseAdapter.php',
        'ThemeXpert\\Onepager\\Adapters\\WordPress' => __DIR__ . '/../..' . '/src/Onepager/Adapters/WordPress.php',
        'ThemeXpert\\Onepager\\Block\\BlockManager' => __DIR__ . '/../..' . '/src/Onepager/Block/BlockManager.php',
        'ThemeXpert\\Onepager\\Block\\Collection' => __DIR__ . '/../..' . '/src/Onepager/Block/Collection.php',
        'ThemeXpert\\Onepager\\Block\\PresetManager' => __DIR__ . '/../..' . '/src/Onepager/Block/PresetManager.php',
        'ThemeXpert\\Onepager\\Block\\Transformers\\ConfigTransformer' => __DIR__ . '/../..' . '/src/Onepager/Block/Transformers/ConfigTransformer.php',
        'ThemeXpert\\Onepager\\Block\\Transformers\\FieldsTransformer' => __DIR__ . '/../..' . '/src/Onepager/Block/Transformers/FieldsTransformer.php',
        'ThemeXpert\\Onepager\\Block\\Transformers\\SerializedControlsConfigTransformer' => __DIR__ . '/../..' . '/src/Onepager/Block/Transformers/SerializedControlsConfigTransformer.php',
        'ThemeXpert\\Onepager\\Block\\Transformers\\SerializedControlsOptionsTransformer' => __DIR__ . '/../..' . '/src/Onepager/Block/Transformers/SerializedControlsOptionsTransformer.php',
        'ThemeXpert\\Onepager\\Onepager' => __DIR__ . '/../..' . '/src/Onepager/Onepager.php',
        'ThemeXpert\\Onepager\\OnepagerInterface' => __DIR__ . '/../..' . '/src/Onepager/OnepagerInterface.php',
        'ThemeXpert\\Onepager\\Render\\Render' => __DIR__ . '/../..' . '/src/Onepager/Render/Render.php',
        'ThemeXpert\\Providers\\Contracts\\ApiInterface' => __DIR__ . '/../..' . '/src/Providers/Contracts/ApiInterface.php',
        'ThemeXpert\\Providers\\Contracts\\AssetInterface' => __DIR__ . '/../..' . '/src/Providers/Contracts/AssetInterface.php',
        'ThemeXpert\\Providers\\Contracts\\ContentInterface' => __DIR__ . '/../..' . '/src/Providers/Contracts/ContentInterface.php',
        'ThemeXpert\\Providers\\Contracts\\NavigationMenuInterface' => __DIR__ . '/../..' . '/src/Providers/Contracts/NavigationMenuInterface.php',
        'ThemeXpert\\Providers\\Contracts\\OptionsPanelInterface' => __DIR__ . '/../..' . '/src/Providers/Contracts/OptionsPanelInterface.php',
        'ThemeXpert\\Providers\\Contracts\\SectionInterface' => __DIR__ . '/../..' . '/src/Providers/Contracts/SectionInterface.php',
        'ThemeXpert\\Providers\\Contracts\\SecurityInterface' => __DIR__ . '/../..' . '/src/Providers/Contracts/SecurityfInterface.php',
        'ThemeXpert\\Providers\\Contracts\\ToolbarInterface' => __DIR__ . '/../..' . '/src/Providers/Contracts/ToolbarInterface.php',
        'ThemeXpert\\Providers\\WordPress\\Api' => __DIR__ . '/../..' . '/src/Providers/WordPress/Api.php',
        'ThemeXpert\\Providers\\WordPress\\Asset' => __DIR__ . '/../..' . '/src/Providers/WordPress/Asset.php',
        'ThemeXpert\\Providers\\WordPress\\Content' => __DIR__ . '/../..' . '/src/Providers/WordPress/Content.php',
        'ThemeXpert\\Providers\\WordPress\\NavigationMenu' => __DIR__ . '/../..' . '/src/Providers/WordPress/NavigationMenu.php',
        'ThemeXpert\\Providers\\WordPress\\Section' => __DIR__ . '/../..' . '/src/Providers/WordPress/Section.php',
        'ThemeXpert\\Providers\\WordPress\\Toolbar' => __DIR__ . '/../..' . '/src/Providers/WordPress/Toolbar.php',
        'ThemeXpert\\Providers\\Wordpress\\OptionsPanel' => __DIR__ . '/../..' . '/src/Providers/WordPress/OptionsPanel.php',
        'ThemeXpert\\View\\Engines\\EngineInterface' => __DIR__ . '/../..' . '/src/View/Engines/EngineInterface.php',
        'ThemeXpert\\View\\Engines\\PhpEngine' => __DIR__ . '/../..' . '/src/View/Engines/PhpEngine.php',
        'ThemeXpert\\View\\View' => __DIR__ . '/../..' . '/src/View/View.php',
        'ThemeXpert\\WordPress\\PageTemplater' => __DIR__ . '/../..' . '/src/WordPress/PageTemplater.php',
        'WP_Bootstrap_Navwalker' => __DIR__ . '/../..' . '/src/WordPress/wp_bootstrap_navwalker.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf7c9438001e917b1192a4176c04e05a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf7c9438001e917b1192a4176c04e05a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcf7c9438001e917b1192a4176c04e05a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitcf7c9438001e917b1192a4176c04e05a::$classMap;

        }, null, ClassLoader::class);
    }
}
