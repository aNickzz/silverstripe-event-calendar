<?php

namespace Unclecheese\EventCalendar;

use SilverStripe\Forms\DateField;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;

class RecurringException extends DataObject
{
    private static $db = [
        'ExceptionDate' => 'Date',
    ];

    private static $has_one = [
        'CalendarEvent' => CalendarEvent::class,
    ];


    private static $default_sort = 'ExceptionDate ASC';


    public function getCMSFields()
    {
        DateField::set_default_config('showcalendar', true);
        $f = new FieldList(
                    new DateField('ExceptionDate', _t('CalendarDateTime.EXCEPTIONDATE', 'Exception Date'))
            );

        $this->extend('updateCMSFields', $f);

        return $f;
    }

    public function summaryFields()
    {
        return [
                    'FormattedExceptionDate' => _t('Calendar.EXCEPTIONDATE', 'Exception date'),
            ];
    }

    public function getFormattedExceptionDate()
    {
        if (!$this->ExceptionDate) {
            return '--';
        }

        return CalendarUtil::get_date_format() == 'mdy' ? $this->obj('ExceptionDate')->Format('m-d-Y') : $this->obj('ExceptionDate')->Format('d-m-Y');
    }


    public function canCreate($member = null, $context = [])
    {
        return Permission::check('CMS_ACCESS_CMSMain');
    }

    public function canEdit($member = null)
    {
        return Permission::check('CMS_ACCESS_CMSMain');
    }

    public function canDelete($member = null)
    {
        return Permission::check('CMS_ACCESS_CMSMain');
    }

    public function canView($member = null)
    {
        return Permission::check('CMS_ACCESS_CMSMain');
    }
}
