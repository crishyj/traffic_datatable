<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
session_start();
include("../lib/DataTables.php");

// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Options,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate,
    DataTables\Editor\ValidateOptions;

// Build our Editor instance and process the data coming from _POST
Editor::inst($db, 'security_traffic_log')
    ->fields(
        Field::inst('new_id')
            ->validator( Validate::maxNum(999999, '.',  ValidateOptions::inst()->message( 'ID field max value is 999999' )) ),
        Field::inst('driver_name')
            ->validator(Validate::notEmpty(ValidateOptions::inst()->message('Driver Name is required'))),
        Field::inst('company_name')
            ->validator(Validate::notEmpty(
                ValidateOptions::inst()
                    ->message('Company Name is required')
            )),
        Field::inst('vehicle_license')
            ->validator(Validate::notEmpty(
                ValidateOptions::inst()
                    ->message('Vehicle License# is required')
            )),
        Field::inst('destination_and_purpose')
            ->validator(Validate::notEmpty(
                ValidateOptions::inst()
                    ->message('Destination & Purpose is required')
            )),
        Field::inst('date_in')
            ->validator(Validate::notEmpty(
                ValidateOptions::inst()
                    ->message('Date In is required')
            ))
            ->validator(Validate::dateFormat('Y-m-d'))
            ->getFormatter(Format::dateSqlToFormat('Y-m-d'))
            ->setFormatter(Format::dateFormatToSql('Y-m-d')),
        Field::inst('time_in')
            ->validator(Validate::notEmpty(
                ValidateOptions::inst()
                    ->message('Time In is required')
            ))
            ->validator(Validate::dateFormat('H:i')),
        Field::inst('date_out')
            ->validator(Validate::notEmpty(
                ValidateOptions::inst()
                    ->message('Date Out is required')
            ))
            ->validator(Validate::dateFormat('Y-m-d'))
            ->getFormatter(Format::dateSqlToFormat('Y-m-d'))
            ->setFormatter(Format::dateFormatToSql('Y-m-d')),
        Field::inst('time_out')
            ->validator(Validate::notEmpty(
                ValidateOptions::inst()
                    ->message('Time Out is required')
            ))
            ->validator(Validate::dateFormat('H:i')),
        Field::inst('comments'),
        Field::inst('creator'),
        Field::inst('created'),                  
    )
    ->debug(true)
    ->process($_POST)
    ->json();
