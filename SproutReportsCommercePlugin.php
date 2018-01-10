<?php

namespace Craft;

/**
 * Class SproutReportsCommercePlugin
 *
 * @author    Barrel Strength Design LLC <sprout@barrelstrengthdesign.com>
 * @copyright Copyright (c) 2012, Barrel Strength Design LLC
 * @license   http://sprout.barrelstrengthdesign.com/license
 * @see       http://sprout.barrelstrengthdesign.com
 * @package   craft.plugins.sproutreportscommerceplugin
 * @since     2.0
 */
class SproutReportsCommercePlugin extends BasePlugin
{
	/**
	 * @return string
	 */
	public function getName()
	{
		return Craft::t('Sprout Reports for Craft Commerce');
	}

    /**
     * @return string
     */
    public function getDescription()
    {
        return Craft::t('A handful of Sprout Reports for Craft Commerce.');
    }

	/**
	 * @return string
	 */
	public function getVersion()
	{
		return '0.6.0';
	}

	/**
	 * @return string
	 */
	public function getSchemaVersion()
	{
		return '0.5.0';
	}

	/**
	 * @return string
	 */
	public function getDeveloper()
	{
		return 'Barrel Strength Design';
	}

	/**
	 * @return string
	 */
	public function getDeveloperUrl()
	{
		return 'http://barrelstrengthdesign.com';
	}

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'http://sprout.barrelstrengthdesign.com/craft-plugins/reports/docs';
    }

	/**
	 * @return bool
	 */
	public function hasCpSection()
	{
		return false;
	}

    /**
     * @return array
     * @throws \Exception
     */
	public function registerSproutReportsDataSources()
	{
		Craft::import('plugins.sproutreportscommerce.integrations.sproutreports.datasources.SproutReportsCommerceProductRevenueDataSource');
		Craft::import('plugins.sproutreportscommerce.integrations.sproutreports.datasources.SproutReportsCommerceOrderHistoryDataSource');

		return array(
			new SproutReportsCommerceProductRevenueDataSource(),
			new SproutReportsCommerceOrderHistoryDataSource()
		);
	}
}