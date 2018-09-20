<?php

namespace PS\CoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PSCoreBundle extends Bundle
{
		public function getParent()
	{
		return 'FOSUserBundle';
	}
}
