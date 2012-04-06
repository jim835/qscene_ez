<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.2
 * @package kernel
 */

/**
 * Cluster index file.
 *
 * Used to serve eZ Publish binary files through HTTP when using one of the eZ Publish clustering implementations.
 * Configuration is made in config.php, using the CLUSTER_* constants.
 */
include 'config.php';

if ( file_exists( 'config.cluster.php' ) )
    include( 'config.cluster.php' );

if ( !defined( 'CLUSTER_STORAGE_BACKEND' ) || CLUSTER_STORAGE_BACKEND === null )
{
    // FIXME: this method is no more defined here
    _die( "Clustering is disabled" );
}

// default values
if ( !defined( 'CLUSTER_ENABLE_HTTP_RANGE' ) )     define( 'CLUSTER_ENABLE_HTTP_RANGE', true );
if ( !defined( 'CLUSTER_ENABLE_HTTP_CACHE' ) )     define( 'CLUSTER_ENABLE_HTTP_CACHE', true );
if ( !defined( 'CLUSTER_HEADER_X_POWERED_BY' ) )   define( 'CLUSTER_HEADER_X_POWERED_BY', true );
if ( !defined( 'CLUSTER_ENABLE_DEBUG' ) )          define( 'CLUSTER_ENABLE_DEBUG', false );
if ( !defined( 'CLUSTER_PERSISTENT_CONNECTION' ) ) define( 'CLUSTER_PERSISTENT_CONNECTION', false );
if ( !defined( 'CLUSTER_STORAGE_USER' ) )          define( 'CLUSTER_STORAGE_USER', '' );
if ( !defined( 'CLUSTER_STORAGE_PASS' ) )          define( 'CLUSTER_STORAGE_PASS', '' );
if ( !defined( 'CLUSTER_STORAGE_DB' ) )            define( 'CLUSTER_STORAGE_DB', '' );
if ( !defined( 'CLUSTER_EXPIRY_TIMEOUT' ) || CLUSTER_EXPIRY_TIMEOUT === true )
    define( 'CLUSTER_EXPIRY_TIMEOUT', 86400 );

ini_set( 'display_errors', CLUSTER_ENABLE_DEBUG );

require_once "kernel/clustering/gateway.php";

if ( defined( 'CLUSTER_STORAGE_GATEWAY_PATH' ) && CLUSTER_STORAGE_GATEWAY_PATH )
    $clusterGatewayFile = CLUSTER_STORAGE_GATEWAY_PATH;
else
    $clusterGatewayFile = "kernel/clustering/" . CLUSTER_STORAGE_BACKEND . ".php";

if ( !file_exists( $clusterGatewayFile ) )
{
    // FIXME: this method is no more defined here
    _die( "Unable to open storage backend gateway class definition file '$clusterGatewayFile'" );
}

// We use require_once as the gateway file may have been included before for initialization purpose
require_once $clusterGatewayFile;
$gateway = ezpClusterGateway::getGateway();
$gateway->retrieve( ltrim( $_SERVER['SCRIPT_URL'], '/' ) );
