<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|null $PlaceType
 * @property Address|null $Address
 * @property list<double>|null $Position
 * @property int<0, 4294967295>|null $Distance
 * @property list<double>|null $MapView
 * @property list<Category>|null $Categories
 * @property list<FoodType>|null $FoodTypes
 * @property list<BusinessChain>|null $BusinessChains
 * @property list<AccessPoint>|null $AccessPoints
 * @property list<AccessRestriction>|null $AccessRestrictions
 * @property TimeZone|null $TimeZone
 * @property string|null $PoliticalView
 * @property PhonemeDetails|null $Phonemes
 */
class SuggestPlaceResult extends Shape
{
    /**
     * @param array{
     *     PlaceId?: string|null,
     *     PlaceType?: 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|null,
     *     Address?: Address|null,
     *     Position?: list<double>|null,
     *     Distance?: int<0, 4294967295>|null,
     *     MapView?: list<double>|null,
     *     Categories?: list<Category>|null,
     *     FoodTypes?: list<FoodType>|null,
     *     BusinessChains?: list<BusinessChain>|null,
     *     AccessPoints?: list<AccessPoint>|null,
     *     AccessRestrictions?: list<AccessRestriction>|null,
     *     TimeZone?: TimeZone|null,
     *     PoliticalView?: string|null,
     *     Phonemes?: PhonemeDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
