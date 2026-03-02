<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerAccessGui\Dependency\Facade;

use Generated\Shared\Transfer\CustomerAccessTransfer;

interface CustomerAccessGuiToCustomerAccessFacadeInterface
{
    public function updateUnauthenticatedCustomerAccess(CustomerAccessTransfer $customerAccessTransfer): CustomerAccessTransfer;

    public function getAllContentTypes(): CustomerAccessTransfer;

    public function getUnrestrictedContentTypes(): CustomerAccessTransfer;

    public function getRestrictedContentTypes(): CustomerAccessTransfer;
}
