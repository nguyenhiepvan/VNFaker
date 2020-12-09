<?php
use Nguyenhiep\Vnfaker\VNFaker;
/** @return Nguyenhiep\Vnfaker\VNFaker; */
if (! function_exists('vnfaker')) {
	function vnfaker(): VNFaker
	{
	    return app(VNFaker::class);
	}
}
