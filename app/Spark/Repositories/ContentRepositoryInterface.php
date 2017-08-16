<?php namespace Spark\Repositories;

interface ContentRepositoryInterface {

	public function getSalesPageSections();

	public function getWebinarPageSections();

	public function getUpsellPageSections();

	public function getExplainerPageSections();

	public function getOrderFormContent();

	public function getBundleDetails();

	public function getContentStyles();

	public function getItems();

	public function getBonuses();

	public function getSuccessPageContent();

	public function getItemCategories();

}
