# ID4i API Client Library - PHP

This library allows developers to interact with the http://id4i.de HTTP API.
Typically you won't have to build it yourselves, you can just pull in the dependency from maven central using Maven, Gradle
or the like.

Feel free to look at the sources and the documentation contained in this repository.

For additional information, please refer to

* http://id4i.de for high level information about the ID4i platform
* https://backend.id4i.de/docs/reference/en/reference.html for information about implementing your own solutions on top of ID4i
* https://github.com/BlueRainSoftware/id4i-api_client-php for this libraries' sources
* https://backend.id4i.de/docs/redoc/index.html for API documentation
* https://github.com/BlueRainSoftware/support for getting additional support

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen
    For more information, please visit [http://bluerain.de](http://bluerain.de)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
"repositories": [
{
"type": "git",
"url": "https://github.com/bluerainsoftware/id4i-api_client-php.git"
}
],
"require": {
"bluerainsoftware/id4i-api_client-php": "*@dev"
}
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
require_once('/path/to/./vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
        <?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure API key authorization: Authorization
    $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
    // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
    // $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\AccountsApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
new GuzzleHttp\Client(),
$config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization
$username = "username_example"; // string | username
$change_role_request = new \Bluerain\ID4iClient\Model\ChangeRoleRequest(); // \Bluerain\ID4iClient\Model\ChangeRoleRequest | changeRoleRequest

try {
$apiInstance->addUserRoles($organization_id, $username, $change_role_request);
} catch (Exception $e) {
echo 'Exception when calling AccountsApi->addUserRoles: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://backend.id4i.de*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**addUserRoles**](docs/Api/AccountsApi.md#adduserroles) | **POST** /api/v1/organizations/{organizationId}/users/{username}/roles | Add role(s) to user
*AccountsApi* | [**completeRegistration**](docs/Api/AccountsApi.md#completeregistration) | **PUT** /account/registration | Complete registration
*AccountsApi* | [**findUserByUsername**](docs/Api/AccountsApi.md#finduserbyusername) | **GET** /api/v1/users/{username} | Find by username
*AccountsApi* | [**findUsers**](docs/Api/AccountsApi.md#findusers) | **GET** /api/v1/users | Find users
*AccountsApi* | [**getAllOrganizationRoles**](docs/Api/AccountsApi.md#getallorganizationroles) | **GET** /api/v1/organizations/{organizationId}/roles | List users and their roles
*AccountsApi* | [**getOrganizationsOfUser**](docs/Api/AccountsApi.md#getorganizationsofuser) | **GET** /api/v1/user/organizations | Retrieve organizations of user
*AccountsApi* | [**getUserRoles**](docs/Api/AccountsApi.md#getuserroles) | **GET** /api/v1/organizations/{organizationId}/users/{username}/roles | Get user roles by username
*AccountsApi* | [**getUsersOfOrganization**](docs/Api/AccountsApi.md#getusersoforganization) | **GET** /api/v1/organizations/{organizationId}/users | Find users in organization
*AccountsApi* | [**inviteUsers**](docs/Api/AccountsApi.md#inviteusers) | **POST** /api/v1/organizations/{organizationId}/users/invite | Invite Users
*AccountsApi* | [**listAllRoles**](docs/Api/AccountsApi.md#listallroles) | **GET** /api/v1/roles | List roles
*AccountsApi* | [**login**](docs/Api/AccountsApi.md#login) | **POST** /login | 
*AccountsApi* | [**registerUser**](docs/Api/AccountsApi.md#registeruser) | **POST** /account/registration | Register user
*AccountsApi* | [**removeUserRoles**](docs/Api/AccountsApi.md#removeuserroles) | **DELETE** /api/v1/organizations/{organizationId}/users/{username}/roles | Remove role(s) from user
*AccountsApi* | [**requestPasswordReset**](docs/Api/AccountsApi.md#requestpasswordreset) | **POST** /account/password | Request password reset
*AccountsApi* | [**verifyPasswordReset**](docs/Api/AccountsApi.md#verifypasswordreset) | **PUT** /account/password | Verify password reset
*AccountsApi* | [**verifyUserRegistration**](docs/Api/AccountsApi.md#verifyuserregistration) | **POST** /account/verification | Verify registration
*AliasApi* | [**addGuidAlias**](docs/Api/AliasApi.md#addguidalias) | **POST** /api/v1/id4ns/{id4n}/alias/{aliasType} | Add alias for GUID or Collection
*AliasApi* | [**getGuidAliasTypes**](docs/Api/AliasApi.md#getguidaliastypes) | **GET** /api/v1/search/guids/aliases/types | List all supported alias types
*AliasApi* | [**getGuidAliases**](docs/Api/AliasApi.md#getguidaliases) | **GET** /api/v1/id4ns/{id4n}/alias | Get all aliases for the given GUID or Collection.
*AliasApi* | [**removeGuidAlias**](docs/Api/AliasApi.md#removeguidalias) | **DELETE** /api/v1/id4ns/{id4n}/alias/{aliasType} | Remove aliases from GUID or Collection
*AliasApi* | [**searchByAlias**](docs/Api/AliasApi.md#searchbyalias) | **GET** /api/v1/search/guids | Search for GUIDs by alias
*ApiKeysApi* | [**addApiKeyPrivilege**](docs/Api/ApiKeysApi.md#addapikeyprivilege) | **POST** /api/v1/apikeys/{key}/privileges | Add privilege
*ApiKeysApi* | [**addApiKeyPrivilegeForId4ns**](docs/Api/ApiKeysApi.md#addapikeyprivilegeforid4ns) | **POST** /api/v1/apikeys/{key}/privileges/{privilege}/id4ns | Add ID4ns of a privilege
*ApiKeysApi* | [**createNewApiKey**](docs/Api/ApiKeysApi.md#createnewapikey) | **POST** /api/v1/apikeys | Create API key
*ApiKeysApi* | [**deleteApiKey**](docs/Api/ApiKeysApi.md#deleteapikey) | **DELETE** /api/v1/apikeys/{key} | Delete API key
*ApiKeysApi* | [**getApiKey**](docs/Api/ApiKeysApi.md#getapikey) | **GET** /api/v1/apikeys/{key} | Show API key
*ApiKeysApi* | [**listAllApiKeyPrivileges**](docs/Api/ApiKeysApi.md#listallapikeyprivileges) | **GET** /api/v1/apikeys/privileges | List all privileges
*ApiKeysApi* | [**listAllApiKeysOfOrganization**](docs/Api/ApiKeysApi.md#listallapikeysoforganization) | **GET** /api/v1/apikeys | Find API key by organization
*ApiKeysApi* | [**listApiKeyPrivileges**](docs/Api/ApiKeysApi.md#listapikeyprivileges) | **GET** /api/v1/apikeys/{key}/privileges | List privileges
*ApiKeysApi* | [**listId4ns**](docs/Api/ApiKeysApi.md#listid4ns) | **GET** /api/v1/apikeys/{key}/privileges/{privilege}/id4ns | ID4ns of a privilege
*ApiKeysApi* | [**removeApiKeyPrivilege**](docs/Api/ApiKeysApi.md#removeapikeyprivilege) | **DELETE** /api/v1/apikeys/{key}/privileges | Remove privilege
*ApiKeysApi* | [**removeApiKeyPrivilegeForId4ns**](docs/Api/ApiKeysApi.md#removeapikeyprivilegeforid4ns) | **DELETE** /api/v1/apikeys/{key}/privileges/{privilege}/id4ns | Remove id4ns of a privilege
*ApiKeysApi* | [**updateApiKey**](docs/Api/ApiKeysApi.md#updateapikey) | **PUT** /api/v1/apikeys/{key} | Update API keys
*AuditingApi* | [**listOrganizationChangeLog**](docs/Api/AuditingApi.md#listorganizationchangelog) | **GET** /api/v1/changelog/organization/{organizationId}/ | List change log entries of an organization
*BillingApi* | [**getPositionsForOrganization**](docs/Api/BillingApi.md#getpositionsfororganization) | **GET** /api/v1/billing/{organizationId}/positions | Get billing positions for a given organization
*BillingApi* | [**getSumForOrganization**](docs/Api/BillingApi.md#getsumfororganization) | **GET** /api/v1/billing/{organizationId} | Get billing amount of services for a given organization
*CollectionsApi* | [**addElementsToCollection**](docs/Api/CollectionsApi.md#addelementstocollection) | **POST** /api/v1/collections/{id4n}/elements | Add elements to collection
*CollectionsApi* | [**createCollection**](docs/Api/CollectionsApi.md#createcollection) | **POST** /api/v1/collections | Create collection
*CollectionsApi* | [**deleteCollection**](docs/Api/CollectionsApi.md#deletecollection) | **DELETE** /api/v1/collections/{id4n} | Delete collection
*CollectionsApi* | [**deleteProperties**](docs/Api/CollectionsApi.md#deleteproperties) | **DELETE** /api/v1/id4ns/{id4n}/properties | Delete ID4n properties
*CollectionsApi* | [**findCollection**](docs/Api/CollectionsApi.md#findcollection) | **GET** /api/v1/collections/{id4n} | Find collection
*CollectionsApi* | [**getAllCollectionsOfOrganization**](docs/Api/CollectionsApi.md#getallcollectionsoforganization) | **GET** /api/v1/organizations/{organizationId}/collections | Get collections of organization
*CollectionsApi* | [**getProperties**](docs/Api/CollectionsApi.md#getproperties) | **GET** /api/v1/id4ns/{id4n}/properties | Retrieve ID4n properties
*CollectionsApi* | [**listElementsOfCollection**](docs/Api/CollectionsApi.md#listelementsofcollection) | **GET** /api/v1/collections/{id4n}/elements | List contents of the collection
*CollectionsApi* | [**patchProperties**](docs/Api/CollectionsApi.md#patchproperties) | **PATCH** /api/v1/id4ns/{id4n}/properties | Patch ID4n properties
*CollectionsApi* | [**removeElementsFromCollection**](docs/Api/CollectionsApi.md#removeelementsfromcollection) | **DELETE** /api/v1/collections/{id4n}/elements | Remove elements from collection
*CollectionsApi* | [**updateCollection**](docs/Api/CollectionsApi.md#updatecollection) | **PATCH** /api/v1/collections/{id4n} | Update collection
*GuidsApi* | [**addGuidAlias**](docs/Api/GuidsApi.md#addguidalias) | **POST** /api/v1/id4ns/{id4n}/alias/{aliasType} | Add alias for GUID or Collection
*GuidsApi* | [**createGuid**](docs/Api/GuidsApi.md#createguid) | **POST** /api/v1/guids | Create GUID(s)
*GuidsApi* | [**deleteProperties**](docs/Api/GuidsApi.md#deleteproperties) | **DELETE** /api/v1/id4ns/{id4n}/properties | Delete ID4n properties
*GuidsApi* | [**getCollections**](docs/Api/GuidsApi.md#getcollections) | **GET** /api/v1/id4ns/{id4n}/collections | Retrieve collections of an ID
*GuidsApi* | [**getGuid**](docs/Api/GuidsApi.md#getguid) | **GET** /api/v1/guids/{id4n} | Retrieve GUID information
*GuidsApi* | [**getGuidAliases**](docs/Api/GuidsApi.md#getguidaliases) | **GET** /api/v1/id4ns/{id4n}/alias | Get all aliases for the given GUID or Collection.
*GuidsApi* | [**getGuidsWithoutCollection**](docs/Api/GuidsApi.md#getguidswithoutcollection) | **GET** /api/v1/guids/withoutCollection | Retrieve GUIDs not in any collection
*GuidsApi* | [**getId4n**](docs/Api/GuidsApi.md#getid4n) | **GET** /api/v1/id4ns/{id4n} | Retrieve ID4n information
*GuidsApi* | [**getProperties**](docs/Api/GuidsApi.md#getproperties) | **GET** /api/v1/id4ns/{id4n}/properties | Retrieve ID4n properties
*GuidsApi* | [**importGS1Codes**](docs/Api/GuidsApi.md#importgs1codes) | **POST** /api/v1/import/gs1 | Import GS1/MAPP codes
*GuidsApi* | [**patchProperties**](docs/Api/GuidsApi.md#patchproperties) | **PATCH** /api/v1/id4ns/{id4n}/properties | Patch ID4n properties
*GuidsApi* | [**removeGuidAlias**](docs/Api/GuidsApi.md#removeguidalias) | **DELETE** /api/v1/id4ns/{id4n}/alias/{aliasType} | Remove aliases from GUID or Collection
*GuidsApi* | [**updateGuid**](docs/Api/GuidsApi.md#updateguid) | **PATCH** /api/v1/guids/{id4n} | Change GUID information.
*HistoryApi* | [**addItem**](docs/Api/HistoryApi.md#additem) | **POST** /api/v1/history/{id4n} | Add history item
*HistoryApi* | [**callList**](docs/Api/HistoryApi.md#calllist) | **GET** /api/v1/history/{id4n}/{organizationId} | DEPRECATED - List history
*HistoryApi* | [**filteredList**](docs/Api/HistoryApi.md#filteredlist) | **GET** /api/v1/history/{id4n} | List history
*HistoryApi* | [**retrieveItem**](docs/Api/HistoryApi.md#retrieveitem) | **GET** /api/v1/history/{id4n}/{organizationId}/{sequenceId} | Get history item
*HistoryApi* | [**updateItem**](docs/Api/HistoryApi.md#updateitem) | **PATCH** /api/v1/history/{id4n}/{organizationId}/{sequenceId} | Update history item
*HistoryApi* | [**updateItemVisibility**](docs/Api/HistoryApi.md#updateitemvisibility) | **PUT** /api/v1/history/{id4n}/{organizationId}/{sequenceId}/visibility | Set history item visibility
*ImagesApi* | [**resolveImageUsingGET**](docs/Api/ImagesApi.md#resolveimageusingget) | **GET** /api/v1/public/image/{imageID} | Resolve image
*MessagingApi* | [**enqueueCustomMessage**](docs/Api/MessagingApi.md#enqueuecustommessage) | **POST** /api/v1/organizations/{organizationId}/messaging/enqueueCustomMessage | Enqueue a custom message
*MessagingApi* | [**getDefaultQueue**](docs/Api/MessagingApi.md#getdefaultqueue) | **GET** /api/v1/organizations/{organizationId}/messaging | 
*MessagingApi* | [**patchDefaultQueue**](docs/Api/MessagingApi.md#patchdefaultqueue) | **PATCH** /api/v1/organizations/{organizationId}/messaging | 
*MetaInformationApi* | [**applicationInfo**](docs/Api/MetaInformationApi.md#applicationinfo) | **GET** /api/v1/info | Retrieve version information about ID4i
*OrganizationsApi* | [**addPartnerOrganization**](docs/Api/OrganizationsApi.md#addpartnerorganization) | **PUT** /api/v1/organizations/{organizationId}/partner | Add partner
*OrganizationsApi* | [**addUserRoles**](docs/Api/OrganizationsApi.md#adduserroles) | **POST** /api/v1/organizations/{organizationId}/users/{username}/roles | Add role(s) to user
*OrganizationsApi* | [**createOrganization**](docs/Api/OrganizationsApi.md#createorganization) | **POST** /api/v1/organizations | Create organization
*OrganizationsApi* | [**deleteOrganization**](docs/Api/OrganizationsApi.md#deleteorganization) | **DELETE** /api/v1/organizations/{organizationId} | Delete organization
*OrganizationsApi* | [**deleteOrganizationBillingAddress**](docs/Api/OrganizationsApi.md#deleteorganizationbillingaddress) | **DELETE** /api/v1/organizations/{organizationId}/addresses/billing | Remove billing address
*OrganizationsApi* | [**deleteOrganizationLogo**](docs/Api/OrganizationsApi.md#deleteorganizationlogo) | **DELETE** /api/v1/organizations/{organizationId}/logo | Delete organization logo
*OrganizationsApi* | [**findOrganization**](docs/Api/OrganizationsApi.md#findorganization) | **GET** /api/v1/organizations/{organizationId} | Find organization by id/namespace
*OrganizationsApi* | [**findOrganizationAddress**](docs/Api/OrganizationsApi.md#findorganizationaddress) | **GET** /api/v1/organizations/{organizationId}/addresses/default | Retrieve address
*OrganizationsApi* | [**findOrganizationBillingAddress**](docs/Api/OrganizationsApi.md#findorganizationbillingaddress) | **GET** /api/v1/organizations/{organizationId}/addresses/billing | Retrieve billing address
*OrganizationsApi* | [**getAllCollectionsOfOrganization**](docs/Api/OrganizationsApi.md#getallcollectionsoforganization) | **GET** /api/v1/organizations/{organizationId}/collections | Get collections of organization
*OrganizationsApi* | [**getAllOrganizationRoles**](docs/Api/OrganizationsApi.md#getallorganizationroles) | **GET** /api/v1/organizations/{organizationId}/roles | List users and their roles
*OrganizationsApi* | [**getOrganizationPrivileges**](docs/Api/OrganizationsApi.md#getorganizationprivileges) | **GET** /api/v1/organizations/{organizationId}/privileges | List my privileges
*OrganizationsApi* | [**getOrganizationsOfUser**](docs/Api/OrganizationsApi.md#getorganizationsofuser) | **GET** /api/v1/user/organizations | Retrieve organizations of user
*OrganizationsApi* | [**getPartnerOrganizations**](docs/Api/OrganizationsApi.md#getpartnerorganizations) | **GET** /api/v1/organizations/{organizationId}/partner | Get partners of an organization
*OrganizationsApi* | [**getUserRoles**](docs/Api/OrganizationsApi.md#getuserroles) | **GET** /api/v1/organizations/{organizationId}/users/{username}/roles | Get user roles by username
*OrganizationsApi* | [**getUsersOfOrganization**](docs/Api/OrganizationsApi.md#getusersoforganization) | **GET** /api/v1/organizations/{organizationId}/users | Find users in organization
*OrganizationsApi* | [**inviteUsers**](docs/Api/OrganizationsApi.md#inviteusers) | **POST** /api/v1/organizations/{organizationId}/users/invite | Invite Users
*OrganizationsApi* | [**listCountries**](docs/Api/OrganizationsApi.md#listcountries) | **GET** /api/v1/countries | List countries
*OrganizationsApi* | [**removePartnerOrganization**](docs/Api/OrganizationsApi.md#removepartnerorganization) | **DELETE** /api/v1/organizations/{organizationId}/partner | Remove partner
*OrganizationsApi* | [**removeUserRoles**](docs/Api/OrganizationsApi.md#removeuserroles) | **DELETE** /api/v1/organizations/{organizationId}/users/{username}/roles | Remove role(s) from user
*OrganizationsApi* | [**setOrganizationLogo**](docs/Api/OrganizationsApi.md#setorganizationlogo) | **POST** /api/v1/organizations/{organizationId}/logo | Update organization logo
*OrganizationsApi* | [**updateOrganization**](docs/Api/OrganizationsApi.md#updateorganization) | **PUT** /api/v1/organizations/{organizationId} | Update organization
*OrganizationsApi* | [**updateOrganizationAddress**](docs/Api/OrganizationsApi.md#updateorganizationaddress) | **PUT** /api/v1/organizations/{organizationId}/addresses/default | Store address
*OrganizationsApi* | [**updateOrganizationBillingAddress**](docs/Api/OrganizationsApi.md#updateorganizationbillingaddress) | **PUT** /api/v1/organizations/{organizationId}/addresses/billing | Store billing address
*PublicServicesApi* | [**getPublicDocument**](docs/Api/PublicServicesApi.md#getpublicdocument) | **GET** /api/v1/public/documents/{id4n}/{organizationId}/{fileName}/metadata | Retrieve a public document (meta-data only, no content)
*PublicServicesApi* | [**getRoutes**](docs/Api/PublicServicesApi.md#getroutes) | **GET** /api/v1/public/routes/{id4n} | Retrieve all public routes for a GUID
*PublicServicesApi* | [**go**](docs/Api/PublicServicesApi.md#go) | **GET** /go/{guid} | Forward
*PublicServicesApi* | [**listAllPublicDocuments**](docs/Api/PublicServicesApi.md#listallpublicdocuments) | **GET** /api/v1/public/documents/{id4n} | List public documents
*PublicServicesApi* | [**listPublicHistory**](docs/Api/PublicServicesApi.md#listpublichistory) | **GET** /api/v1/public/history/{id4n} | Shows the public history of the given GUID
*PublicServicesApi* | [**readOrganizationInfo**](docs/Api/PublicServicesApi.md#readorganizationinfo) | **GET** /api/v1/public/organizations/{organizationId} | Read public organization information
*PublicServicesApi* | [**readPublicDocument**](docs/Api/PublicServicesApi.md#readpublicdocument) | **GET** /api/v1/public/documents/{id4n}/{organizationId}/{fileName} | Read public document contents
*PublicServicesApi* | [**resolveImageUsingGET**](docs/Api/PublicServicesApi.md#resolveimageusingget) | **GET** /api/v1/public/image/{imageID} | Resolve image
*PublicServicesApi* | [**resolveWhoIsEntry**](docs/Api/PublicServicesApi.md#resolvewhoisentry) | **GET** /whois/{id4n} | Resolve owner of id4n
*RoutingApi* | [**getAllRoutes**](docs/Api/RoutingApi.md#getallroutes) | **GET** /api/v1/routingfiles/{id4n}/routes/{type} | Retrieve all routes of a GUID (or ID4N)
*RoutingApi* | [**getRoute**](docs/Api/RoutingApi.md#getroute) | **GET** /api/v1/routingfiles/{id4n}/route/{type} | Retrieve current route of a GUID (or ID4N)
*RoutingApi* | [**getRoutingFile**](docs/Api/RoutingApi.md#getroutingfile) | **GET** /api/v1/routingfiles/{id4n} | Retrieve routing file
*RoutingApi* | [**updateRoutingFile**](docs/Api/RoutingApi.md#updateroutingfile) | **PUT** /api/v1/routingfiles/{id4n} | Store routing file
*StorageApi* | [**createDocument**](docs/Api/StorageApi.md#createdocument) | **POST** /api/v1/documents/{id4n}/{organizationId} | Create an document for an id4n
*StorageApi* | [**deleteDocument**](docs/Api/StorageApi.md#deletedocument) | **DELETE** /api/v1/documents/{id4n}/{organizationId}/{fileName} | Delete a document
*StorageApi* | [**getDocument**](docs/Api/StorageApi.md#getdocument) | **GET** /api/v1/documents/{id4n}/{organizationId}/{fileName}/metadata | Retrieve a document (meta-data only, no content)
*StorageApi* | [**getPublicDocument**](docs/Api/StorageApi.md#getpublicdocument) | **GET** /api/v1/public/documents/{id4n}/{organizationId}/{fileName}/metadata | Retrieve a public document (meta-data only, no content)
*StorageApi* | [**listAllDocuments**](docs/Api/StorageApi.md#listalldocuments) | **GET** /api/v1/documents/{id4n} | List documents
*StorageApi* | [**listAllPublicDocuments**](docs/Api/StorageApi.md#listallpublicdocuments) | **GET** /api/v1/public/documents/{id4n} | List public documents
*StorageApi* | [**listDocuments**](docs/Api/StorageApi.md#listdocuments) | **GET** /api/v1/documents/{id4n}/{organizationId} | List organization specific documents
*StorageApi* | [**putDocument**](docs/Api/StorageApi.md#putdocument) | **PUT** /api/v1/documents/{id4n}/{organizationId} | Put an document for an id4n
*StorageApi* | [**readDocument**](docs/Api/StorageApi.md#readdocument) | **GET** /api/v1/documents/{id4n}/{organizationId}/{fileName} | Read document contents
*StorageApi* | [**readFromMicrostorage**](docs/Api/StorageApi.md#readfrommicrostorage) | **GET** /api/v1/microstorage/{id4n}/{organization} | Read data from microstorage
*StorageApi* | [**readPublicDocument**](docs/Api/StorageApi.md#readpublicdocument) | **GET** /api/v1/public/documents/{id4n}/{organizationId}/{fileName} | Read public document contents
*StorageApi* | [**updateDocumentMetadata**](docs/Api/StorageApi.md#updatedocumentmetadata) | **PATCH** /api/v1/documents/{id4n}/{organizationId}/{fileName}/metadata | Update a document
*StorageApi* | [**writeToMicrostorage**](docs/Api/StorageApi.md#writetomicrostorage) | **PUT** /api/v1/microstorage/{id4n}/{organization} | Write data to microstorage
*TransferApi* | [**getSendInfo**](docs/Api/TransferApi.md#getsendinfo) | **GET** /api/v1/transfers/{id4n}/sendInfo | Show transfer preparation information
*TransferApi* | [**prepare**](docs/Api/TransferApi.md#prepare) | **PUT** /api/v1/transfers/{id4n}/sendInfo | Prepare an object for transfer
*TransferApi* | [**receive**](docs/Api/TransferApi.md#receive) | **PUT** /api/v1/transfers/{id4n}/receiveInfo | Transfer a GUID or collection, obtaining it (i.e. becoming the holder) and if allowed also taking ownership
*WhoIsApi* | [**resolveWhoIsEntry**](docs/Api/WhoIsApi.md#resolvewhoisentry) | **GET** /whois/{id4n} | Resolve owner of id4n


## Documentation For Models

 - [AccountCredentials](docs/Model/AccountCredentials.md)
 - [AddApiKeyPrivilegeRequest](docs/Model/AddApiKeyPrivilegeRequest.md)
 - [AddPartnerRequest](docs/Model/AddPartnerRequest.md)
 - [ApiError](docs/Model/ApiError.md)
 - [ApiKeyChangeRequest](docs/Model/ApiKeyChangeRequest.md)
 - [ApiKeyCreationRequest](docs/Model/ApiKeyCreationRequest.md)
 - [ApiKeyPresentation](docs/Model/ApiKeyPresentation.md)
 - [ApiKeyPrivilege](docs/Model/ApiKeyPrivilege.md)
 - [ApiKeyPrivilegeInfo](docs/Model/ApiKeyPrivilegeInfo.md)
 - [AppInfoPresentation](docs/Model/AppInfoPresentation.md)
 - [BillingPosition](docs/Model/BillingPosition.md)
 - [ChangeLogEntry](docs/Model/ChangeLogEntry.md)
 - [ChangeRoleRequest](docs/Model/ChangeRoleRequest.md)
 - [CompleteUserRegistrationRequest](docs/Model/CompleteUserRegistrationRequest.md)
 - [Country](docs/Model/Country.md)
 - [CreateCollectionRequest](docs/Model/CreateCollectionRequest.md)
 - [CreateGuidRequest](docs/Model/CreateGuidRequest.md)
 - [Document](docs/Model/Document.md)
 - [DocumentUpdate](docs/Model/DocumentUpdate.md)
 - [Guid](docs/Model/Guid.md)
 - [GuidAlias](docs/Model/GuidAlias.md)
 - [GuidCollection](docs/Model/GuidCollection.md)
 - [HistoryItem](docs/Model/HistoryItem.md)
 - [HistoryItemUpdate](docs/Model/HistoryItemUpdate.md)
 - [Id4n](docs/Model/Id4n.md)
 - [Id4nPresentation](docs/Model/Id4nPresentation.md)
 - [ImportGS1CodesRequest](docs/Model/ImportGS1CodesRequest.md)
 - [ListOfGS1s](docs/Model/ListOfGS1s.md)
 - [ListOfId4ns](docs/Model/ListOfId4ns.md)
 - [Organization](docs/Model/Organization.md)
 - [OrganizationAddress](docs/Model/OrganizationAddress.md)
 - [OrganizationUpdate](docs/Model/OrganizationUpdate.md)
 - [OrganizationUserInvitation](docs/Model/OrganizationUserInvitation.md)
 - [OrganizationUserInvitationListRequest](docs/Model/OrganizationUserInvitationListRequest.md)
 - [PaginatedResponseOfApiKeyPresentation](docs/Model/PaginatedResponseOfApiKeyPresentation.md)
 - [PaginatedResponseOfApiKeyPrivilege](docs/Model/PaginatedResponseOfApiKeyPrivilege.md)
 - [PaginatedResponseOfApiKeyPrivilegeInfo](docs/Model/PaginatedResponseOfApiKeyPrivilegeInfo.md)
 - [PaginatedResponseOfChangeLogEntry](docs/Model/PaginatedResponseOfChangeLogEntry.md)
 - [PaginatedResponseOfCountry](docs/Model/PaginatedResponseOfCountry.md)
 - [PaginatedResponseOfDocument](docs/Model/PaginatedResponseOfDocument.md)
 - [PaginatedResponseOfGuid](docs/Model/PaginatedResponseOfGuid.md)
 - [PaginatedResponseOfGuidCollection](docs/Model/PaginatedResponseOfGuidCollection.md)
 - [PaginatedResponseOfHistoryItem](docs/Model/PaginatedResponseOfHistoryItem.md)
 - [PaginatedResponseOfId4nPresentation](docs/Model/PaginatedResponseOfId4nPresentation.md)
 - [PaginatedResponseOfOrganization](docs/Model/PaginatedResponseOfOrganization.md)
 - [PaginatedResponseOfPartnerOrganization](docs/Model/PaginatedResponseOfPartnerOrganization.md)
 - [PaginatedResponseOfRole](docs/Model/PaginatedResponseOfRole.md)
 - [PaginatedResponseOfUserPresentation](docs/Model/PaginatedResponseOfUserPresentation.md)
 - [PaginatedResponseOfUserRoles](docs/Model/PaginatedResponseOfUserRoles.md)
 - [PaginatedResponseOfstring](docs/Model/PaginatedResponseOfstring.md)
 - [PartnerOrganization](docs/Model/PartnerOrganization.md)
 - [PasswordResetRequest](docs/Model/PasswordResetRequest.md)
 - [PasswordResetVerificationRequest](docs/Model/PasswordResetVerificationRequest.md)
 - [PublicImagePresentation](docs/Model/PublicImagePresentation.md)
 - [QueuePresentation](docs/Model/QueuePresentation.md)
 - [QueueUpdateRequest](docs/Model/QueueUpdateRequest.md)
 - [RegistrationVerificationTokenPresentation](docs/Model/RegistrationVerificationTokenPresentation.md)
 - [RemoveApiKeyPrivilegeRequest](docs/Model/RemoveApiKeyPrivilegeRequest.md)
 - [RemovePartnerRequest](docs/Model/RemovePartnerRequest.md)
 - [Role](docs/Model/Role.md)
 - [Route](docs/Model/Route.md)
 - [RoutingFile](docs/Model/RoutingFile.md)
 - [RoutingFileRequest](docs/Model/RoutingFileRequest.md)
 - [RoutingOptions](docs/Model/RoutingOptions.md)
 - [SendCustomMessage](docs/Model/SendCustomMessage.md)
 - [ServiceCosts](docs/Model/ServiceCosts.md)
 - [SimpleMessageResponse](docs/Model/SimpleMessageResponse.md)
 - [TransferReceiveInfo](docs/Model/TransferReceiveInfo.md)
 - [TransferSendInfo](docs/Model/TransferSendInfo.md)
 - [UserPresentation](docs/Model/UserPresentation.md)
 - [UserRegistrationRequest](docs/Model/UserRegistrationRequest.md)
 - [UserRegistrationResponse](docs/Model/UserRegistrationResponse.md)
 - [UserRoles](docs/Model/UserRoles.md)
 - [Visibility](docs/Model/Visibility.md)
 - [VisibilityUpdate](docs/Model/VisibilityUpdate.md)
 - [WhoIsResponse](docs/Model/WhoIsResponse.md)


## Documentation For Authorization


## Authorization

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author

info@bluerain.de

