<?php namespace Spark\Repositories;

use Illuminate\Http\Request;
use App\Http\Requests;
use Content;

class ContentRepository implements ContentRepositoryInterface {

	protected $content;

	public function __construct(Request $request)
	{
		$this->content = Content::load($request->segment(1));
	}

 	public function getSalesPageSections()
	{
		return $this->content->sales_page;
	}	

	public function getWebinarPageSections()
	{
		return $this->content->webinar_page;
	}	

	public function getUpsellPageSections()
	{
		return $this->content->upsell_page;
	}

	public function getExplainerPageSections()
	{
		return $this->content->explainer_page;
	}

	public function getOrderFormContent()
	{
		return $this->content->order_forms;
	}

	public function getBundleDetails()
	{
		return $this->content->bundle[0];
	}

	public function getContentStyles()
	{
		return $this->content->content_styles[0];
	}

	public function getItems()
	{
		return $this->content->items;
	}

	public function getBonuses()
	{
		return $this->content->bonuses;
	}

	public function getSuccessPageContent()
	{
		return $this->content->order_success_page[0];
	}

	public function getItemCategories()
	{
		return $this->content->categories;
	}

	public function getCounts()
	{
		return $this->content->counts[0];
	}
}
