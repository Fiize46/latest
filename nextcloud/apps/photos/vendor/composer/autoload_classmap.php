<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Hexogen\\KDTree\\Exception\\ValidationException' => $vendorDir . '/hexogen/kdtree/src/Exception/ValidationException.php',
    'Hexogen\\KDTree\\FSKDTree' => $vendorDir . '/hexogen/kdtree/src/FSKDTree.php',
    'Hexogen\\KDTree\\FSNode' => $vendorDir . '/hexogen/kdtree/src/FSNode.php',
    'Hexogen\\KDTree\\FSTreePersister' => $vendorDir . '/hexogen/kdtree/src/FSTreePersister.php',
    'Hexogen\\KDTree\\Interfaces\\ItemFactoryInterface' => $vendorDir . '/hexogen/kdtree/src/Interfaces/ItemFactoryInterface.php',
    'Hexogen\\KDTree\\Interfaces\\ItemInterface' => $vendorDir . '/hexogen/kdtree/src/Interfaces/ItemInterface.php',
    'Hexogen\\KDTree\\Interfaces\\ItemListInterface' => $vendorDir . '/hexogen/kdtree/src/Interfaces/ItemListInterface.php',
    'Hexogen\\KDTree\\Interfaces\\KDTreeInterface' => $vendorDir . '/hexogen/kdtree/src/Interfaces/KDTreeInterface.php',
    'Hexogen\\KDTree\\Interfaces\\NodeInterface' => $vendorDir . '/hexogen/kdtree/src/Interfaces/NodeInterface.php',
    'Hexogen\\KDTree\\Interfaces\\PointInterface' => $vendorDir . '/hexogen/kdtree/src/Interfaces/PointInterface.php',
    'Hexogen\\KDTree\\Interfaces\\SearchAbstract' => $vendorDir . '/hexogen/kdtree/src/Interfaces/SearchAbstract.php',
    'Hexogen\\KDTree\\Interfaces\\TreePersisterInterface' => $vendorDir . '/hexogen/kdtree/src/Interfaces/TreePersisterInterface.php',
    'Hexogen\\KDTree\\Item' => $vendorDir . '/hexogen/kdtree/src/Item.php',
    'Hexogen\\KDTree\\ItemFactory' => $vendorDir . '/hexogen/kdtree/src/ItemFactory.php',
    'Hexogen\\KDTree\\ItemList' => $vendorDir . '/hexogen/kdtree/src/ItemList.php',
    'Hexogen\\KDTree\\KDTree' => $vendorDir . '/hexogen/kdtree/src/KDTree.php',
    'Hexogen\\KDTree\\NearestSearch' => $vendorDir . '/hexogen/kdtree/src/NearestSearch.php',
    'Hexogen\\KDTree\\Node' => $vendorDir . '/hexogen/kdtree/src/Node.php',
    'Hexogen\\KDTree\\Point' => $vendorDir . '/hexogen/kdtree/src/Point.php',
    'OCA\\Photos\\Album\\AlbumFile' => $baseDir . '/lib/Album/AlbumFile.php',
    'OCA\\Photos\\Album\\AlbumInfo' => $baseDir . '/lib/Album/AlbumInfo.php',
    'OCA\\Photos\\Album\\AlbumMapper' => $baseDir . '/lib/Album/AlbumMapper.php',
    'OCA\\Photos\\Album\\AlbumWithFiles' => $baseDir . '/lib/Album/AlbumWithFiles.php',
    'OCA\\Photos\\AppInfo\\Application' => $baseDir . '/lib/AppInfo/Application.php',
    'OCA\\Photos\\Command\\AlbumAddCommand' => $baseDir . '/lib/Command/AlbumAddCommand.php',
    'OCA\\Photos\\Command\\AlbumCreateCommand' => $baseDir . '/lib/Command/AlbumCreateCommand.php',
    'OCA\\Photos\\Command\\UpdateReverseGeocodingFilesCommand' => $baseDir . '/lib/Command/UpdateReverseGeocodingFilesCommand.php',
    'OCA\\Photos\\Controller\\AlbumsController' => $baseDir . '/lib/Controller/AlbumsController.php',
    'OCA\\Photos\\Controller\\ApiController' => $baseDir . '/lib/Controller/ApiController.php',
    'OCA\\Photos\\Controller\\PageController' => $baseDir . '/lib/Controller/PageController.php',
    'OCA\\Photos\\Controller\\PreviewController' => $baseDir . '/lib/Controller/PreviewController.php',
    'OCA\\Photos\\Controller\\PublicAlbumController' => $baseDir . '/lib/Controller/PublicAlbumController.php',
    'OCA\\Photos\\Controller\\PublicPreviewController' => $baseDir . '/lib/Controller/PublicPreviewController.php',
    'OCA\\Photos\\DB\\PhotosFile' => $baseDir . '/lib/DB/PhotosFile.php',
    'OCA\\Photos\\DB\\Place\\PlaceFile' => $baseDir . '/lib/DB/Place/PlaceFile.php',
    'OCA\\Photos\\DB\\Place\\PlaceInfo' => $baseDir . '/lib/DB/Place/PlaceInfo.php',
    'OCA\\Photos\\DB\\Place\\PlaceMapper' => $baseDir . '/lib/DB/Place/PlaceMapper.php',
    'OCA\\Photos\\Dashboard\\OnThisDay' => $baseDir . '/lib/Dashboard/OnThisDay.php',
    'OCA\\Photos\\Exception\\AlreadyInAlbumException' => $baseDir . '/lib/Exception/AlreadyInAlbumException.php',
    'OCA\\Photos\\Jobs\\AutomaticPlaceMapperJob' => $baseDir . '/lib/Jobs/AutomaticPlaceMapperJob.php',
    'OCA\\Photos\\Listener\\AlbumsManagementEventListener' => $baseDir . '/lib/Listener/AlbumsManagementEventListener.php',
    'OCA\\Photos\\Listener\\CSPListener' => $baseDir . '/lib/Listener/CSPListener.php',
    'OCA\\Photos\\Listener\\ExifMetadataProvider' => $baseDir . '/lib/Listener/ExifMetadataProvider.php',
    'OCA\\Photos\\Listener\\LoadSidebarScripts' => $baseDir . '/lib/Listener/LoadSidebarScripts.php',
    'OCA\\Photos\\Listener\\OriginalDateTimeMetadataProvider' => $baseDir . '/lib/Listener/OriginalDateTimeMetadataProvider.php',
    'OCA\\Photos\\Listener\\PlaceMetadataProvider' => $baseDir . '/lib/Listener/PlaceMetadataProvider.php',
    'OCA\\Photos\\Listener\\SabrePluginAuthInitListener' => $baseDir . '/lib/Listener/SabrePluginAuthInitListener.php',
    'OCA\\Photos\\Listener\\SizeMetadataProvider' => $baseDir . '/lib/Listener/SizeMetadataProvider.php',
    'OCA\\Photos\\Listener\\TagListener' => $baseDir . '/lib/Listener/TagListener.php',
    'OCA\\Photos\\Migration\\Version20000Date20220727125801' => $baseDir . '/lib/Migration/Version20000Date20220727125801.php',
    'OCA\\Photos\\Migration\\Version20001Date20220830131446' => $baseDir . '/lib/Migration/Version20001Date20220830131446.php',
    'OCA\\Photos\\Migration\\Version20003Date20221102170153' => $baseDir . '/lib/Migration/Version20003Date20221102170153.php',
    'OCA\\Photos\\Migration\\Version20003Date20221103094628' => $baseDir . '/lib/Migration/Version20003Date20221103094628.php',
    'OCA\\Photos\\Migration\\Version3000Date20240417075404' => $baseDir . '/lib/Migration/Version3000Date20240417075404.php',
    'OCA\\Photos\\RepairStep\\InitMetadata' => $baseDir . '/lib/RepairStep/InitMetadata.php',
    'OCA\\Photos\\Sabre\\Album\\AlbumPhoto' => $baseDir . '/lib/Sabre/Album/AlbumPhoto.php',
    'OCA\\Photos\\Sabre\\Album\\AlbumRoot' => $baseDir . '/lib/Sabre/Album/AlbumRoot.php',
    'OCA\\Photos\\Sabre\\Album\\AlbumsHome' => $baseDir . '/lib/Sabre/Album/AlbumsHome.php',
    'OCA\\Photos\\Sabre\\Album\\PublicAlbumPhoto' => $baseDir . '/lib/Sabre/Album/PublicAlbumPhoto.php',
    'OCA\\Photos\\Sabre\\Album\\PublicAlbumRoot' => $baseDir . '/lib/Sabre/Album/PublicAlbumRoot.php',
    'OCA\\Photos\\Sabre\\Album\\SharedAlbumRoot' => $baseDir . '/lib/Sabre/Album/SharedAlbumRoot.php',
    'OCA\\Photos\\Sabre\\Album\\SharedAlbumsHome' => $baseDir . '/lib/Sabre/Album/SharedAlbumsHome.php',
    'OCA\\Photos\\Sabre\\CollectionPhoto' => $baseDir . '/lib/Sabre/CollectionPhoto.php',
    'OCA\\Photos\\Sabre\\PhotosHome' => $baseDir . '/lib/Sabre/PhotosHome.php',
    'OCA\\Photos\\Sabre\\Place\\PlacePhoto' => $baseDir . '/lib/Sabre/Place/PlacePhoto.php',
    'OCA\\Photos\\Sabre\\Place\\PlaceRoot' => $baseDir . '/lib/Sabre/Place/PlaceRoot.php',
    'OCA\\Photos\\Sabre\\Place\\PlacesHome' => $baseDir . '/lib/Sabre/Place/PlacesHome.php',
    'OCA\\Photos\\Sabre\\PropFindPlugin' => $baseDir . '/lib/Sabre/PropFindPlugin.php',
    'OCA\\Photos\\Sabre\\PublicAlbumAuthBackend' => $baseDir . '/lib/Sabre/PublicAlbumAuthBackend.php',
    'OCA\\Photos\\Sabre\\PublicRootCollection' => $baseDir . '/lib/Sabre/PublicRootCollection.php',
    'OCA\\Photos\\Sabre\\RootCollection' => $baseDir . '/lib/Sabre/RootCollection.php',
    'OCA\\Photos\\Service\\MediaPlaceManager' => $baseDir . '/lib/Service/MediaPlaceManager.php',
    'OCA\\Photos\\Service\\ReverseGeoCoderService' => $baseDir . '/lib/Service/ReverseGeoCoderService.php',
    'OCA\\Photos\\Service\\UserConfigService' => $baseDir . '/lib/Service/UserConfigService.php',
);
