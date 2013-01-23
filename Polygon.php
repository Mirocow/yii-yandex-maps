<?php
/**
 * \YandexMaps\Polygon class file.
 */

namespace YandexMaps;

/**
 * Polyline
 */
class Polygon extends GeoObject
{
	/**
	 * @param array $geometry
	 * @param array $properties
	 * @param array $options
	 */
	public function __construct(array $geometry, array $properties = array(), array $options = array())
	{
		$feature = array(
			'geometry' => array(
				'type' => "Polygon",
				'coordinates' => $geometry,
			),
			'properties' => $properties,
		);
		parent::__construct($feature, $options);
	}

	/**
	 * @return array
	 */
	public function getGeometry()
	{
		$geometry = parent::getGeometry();
		if (isset($geometry['coordinates'])) {
			$geometry = $geometry['coordinates'];
		}
		return $geometry;
	}
}