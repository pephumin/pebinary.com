#!/usr/bin/env ruby

require 'geo_pattern'
pattern = GeoPattern.generate('phumin', base_color: '#00f', patterns: [:concentric_circles])
puts pattern.to_svg
# puts pattern.to_base64
puts pattern.to_data_uri
