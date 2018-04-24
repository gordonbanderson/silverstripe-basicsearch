<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 23/4/2561
 * Time: 22:03 น.
 */

namespace Suilven\BasicSearch;
use SilverStripe\CMS\Search\SearchForm;
use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;

class FindSearchPageExtension extends Extension
{
    /**
     * @todo Get smart about caching here
     *
     * @return string link to the search page
     */
    function getSearchPageURI() {
        $result = '';
        $searchPage = DataObject::get_one("Suilven\BasicSearch\SearchPage");
        if ($searchPage) {
            $result = $searchPage->AbsoluteLink();
        }
        return $result;
    }

    /**
     * @return null | SearchPage get a singleton instance of the search page
     */
    function getSearchPage() {
        return DataObject::get("Suilven\BasicSearch\SearchPage")->first();
    }

}
