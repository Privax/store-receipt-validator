<?php
namespace ReceiptValidator\iTunes;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class ReceiptResponse
{
    /**
     * iOS 7 >
     * @Type("string")
     * @SerializedName("adam_id")
     */
    protected $adamId;

    /**
     * >= iOS 7
     * @Type("string")
     * @SerializedName("application_version")
     */
    protected $applicationVersion;

    /**
     * >= iOS 7
     * @Type("string")
     * @SerializedName("bundle_id")
     */
    protected $bundleId;

    /**
     * >= iOS 7
     * @Type("string")
     * @SerializedName("download_id")
     */
    protected $downloadId;

    /**
     * >= iOS 7
     * @Type("array<ReceiptValidator\iTunes\ReceiptResponse>")
     * @SerializedName("in_app")
     */
    protected $inApp = array();

    /**
     * >= iOS 7
     * @Type("string")
     * @SerializedName("is_trial_period")
     */
    protected $isTrialPeriod;

    /**
    * @Type("string")
    */
    protected $bid = '';

    /**
    * @Type("string")
    */
    protected $bvrs = '';

    /**
     * @Type("DateTime<'Y-m-d H:i:s Etc/e'>")
     * @SerializedName("expires_date")
     */
    protected $expiresDate = '';

    /**
    * @Type("string")
    * @SerializedName("expires_date_ms")
    */
    protected $expiresDateMs = '';

    /**
    * @Type("DateTime<'Y-m-d H:i:s e'>")
    * @SerializedName("expires_date_pst")
    */
    protected $expiresDatePst = '';

    /**
    * @Type("string")
    * @SerializedName("item_id")
    */
    protected $itemId = '';

    /**
    * @Type("DateTime<'Y-m-d H:i:s Etc/e'>")
    * @SerializedName("original_purchase_date")
    */
    protected $originalPurchaseDate = '';

    /**
    * @Type("string")
    * @SerializedName("original_purchase_date_ms")
    */
    protected $originalPurchaseDateMs = '';

    /**
    * @Type("DateTime<'Y-m-d H:i:s e'>")
    * @SerializedName("original_purchase_date_pst")
    */
    protected $originalPurchaseDatePst = '';

    /**
    * @Type("string")
    * @SerializedName("original_transaction_id")
    */
    protected $originalTransactionId = '';

    /**
    * @Type("string")
    * @SerializedName("product_id")
    */
    protected $productId = '';

    /**
    * @Type("DateTime<'Y-m-d H:i:s Etc/e'>")
    * @SerializedName("purchase_date")
    */
    protected $purchaseDate = '';

    /**
    * @Type("string")
    * @SerializedName("purchase_date_ms")
    */
    protected $purchaseDateMs = '';

    /**
    * @Type("DateTime<'Y-m-d H:i:s e'>")
    * @SerializedName("purchase_date_pst")
    */
    protected $purchaseDatePst = '';

    /**
    * @Type("string")
    */
    protected $quantity = '';

    /**
    * @Type("string")
    * @SerializedName("transaction_id")
    */
    protected $transactionId = '';

    /**
    * @Type("string")
    * @SerializedName("unique_identifier")
    */
    protected $uniqueIdentifier = '';

    /**
    * @Type("string")
    * @SerializedName("unique_vendor_identifier")
    */
    protected $uniqueVendorIdentifier = '';

    /**
    * @Type("string")
    * @SerializedName("web_order_line_item_id")
    */
    protected $webOrderLineItemId = '';

    /**
     * @return string
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @param string $bid
     */
    public function setBid($bid)
    {
        $this->bid = $bid;
    }

    /**
     * @return string
     */
    public function getBvrs()
    {
        return $this->bvrs;
    }

    /**
     * @param string $bvrs
     */
    public function setBvrs($bvrs)
    {
        $this->bvrs = $bvrs;
    }

    /**
     * @return \DateTime
     */
    public function getExpiresDate()
    {
        return $this->expiresDate;
    }

    /**
     * @param \DateTime $expiresDate
     */
    public function setExpiresDate($expiresDate)
    {
        $this->expiresDate = $expiresDate;
    }

    /**
     * @return string
     */
    public function getExpiresDateMs()
    {
        return $this->expiresDateMs;
    }

    /**
     * @param string $expiresDateMs
     */
    public function setExpiresDateMs($expiresDateMs)
    {
        $this->expiresDateMs = $expiresDateMs;
    }

    /**
     * @return \DateTime
     */
    public function getExpiresDatePst()
    {
        return $this->expiresDatePst;
    }

    /**
     * @param \DateTime $expiresDatePst
     */
    public function setExpiresDatePst($expiresDatePst)
    {
        $this->expiresDatePst = $expiresDatePst;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param string $itemId
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * @return string
     */
    public function getOriginalPurchaseDate()
    {
        return $this->originalPurchaseDate;
    }

    /**
     * @param string $originalPurchaseDate
     */
    public function setOriginalPurchaseDate($originalPurchaseDate)
    {
        $this->originalPurchaseDate = $originalPurchaseDate;
    }

    /**
     * @return string
     */
    public function getOriginalPurchaseDateMs()
    {
        return $this->originalPurchaseDateMs;
    }

    /**
     * @param string $originalPurchaseDateMs
     */
    public function setOriginalPurchaseDateMs($originalPurchaseDateMs)
    {
        $this->originalPurchaseDateMs = $originalPurchaseDateMs;
    }

    /**
     * @return string
     */
    public function getOriginalPurchaseDatePst()
    {
        return $this->originalPurchaseDatePst;
    }

    /**
     * @param string $originalPurchaseDatePst
     */
    public function setOriginalPurchaseDatePst($originalPurchaseDatePst)
    {
        $this->originalPurchaseDatePst = $originalPurchaseDatePst;
    }

    /**
     * @return string
     */
    public function getOriginalTransactionId()
    {
        return $this->originalTransactionId;
    }

    /**
     * @param string $originalTransactionId
     */
    public function setOriginalTransactionId($originalTransactionId)
    {
        $this->originalTransactionId = $originalTransactionId;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * @param \DateTime $purchaseDate
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;
    }

    /**
     * @return string
     */
    public function getPurchaseDateMs()
    {
        return $this->purchaseDateMs;
    }

    /**
     * @param string $purchaseDateMs
     */
    public function setPurchaseDateMs($purchaseDateMs)
    {
        $this->purchaseDateMs = $purchaseDateMs;
    }

    /**
     * @return \DateTime
     */
    public function getPurchaseDatePst()
    {
        return $this->purchaseDatePst;
    }

    /**
     * @param \DateTime $purchaseDatePst
     */
    public function setPurchaseDatePst($purchaseDatePst)
    {
        $this->purchaseDatePst = $purchaseDatePst;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return string
     */
    public function getUniqueIdentifier()
    {
        return $this->uniqueIdentifier;
    }

    /**
     * @param string $uniqueIdentifier
     */
    public function setUniqueIdentifier($uniqueIdentifier)
    {
        $this->uniqueIdentifier = $uniqueIdentifier;
    }

    /**
     * @return string
     */
    public function getUniqueVendorIdentifier()
    {
        return $this->uniqueVendorIdentifier;
    }

    /**
     * @param string $uniqueVendorIdentifier
     */
    public function setUniqueVendorIdentifier($uniqueVendorIdentifier)
    {
        $this->uniqueVendorIdentifier = $uniqueVendorIdentifier;
    }

    /**
     * @return string
     */
    public function getWebOrderLineItemId()
    {
        return $this->webOrderLineItemId;
    }

    /**
     * @param string $webOrderLineItemId
     */
    public function setWebOrderLineItemId($webOrderLineItemId)
    {
        $this->webOrderLineItemId = $webOrderLineItemId;
    }

    /**
     * @return bool
     */
    public function hasActiveSubscription()
    {
        $now = new \DateTime();

        return $this->expiresDateFormatted >= $now;
    }

    /**
     * @return string
     */
    public function getAdamId()
    {
        return $this->adamId;
    }

    /**
     * @param string $adamId
     */
    public function setAdamId($adamId)
    {
        $this->adamId = $adamId;
    }

    /**
     * @return string
     */
    public function getApplicationVersion()
    {
        return $this->applicationVersion;
    }

    /**
     * @param string $applicationVersion
     */
    public function setApplicationVersion($applicationVersion)
    {
        $this->applicationVersion = $applicationVersion;
    }

    /**
     * @return string
     */
    public function getBundleId()
    {
        return $this->bundleId;
    }

    /**
     * @param string $bundleId
     */
    public function setBundleId($bundleId)
    {
        $this->bundleId = $bundleId;
    }

    /**
     * @return string
     */
    public function getDownloadId()
    {
        return $this->downloadId;
    }

    /**
     * @param string $downloadId
     */
    public function setDownloadId($downloadId)
    {
        $this->downloadId = $downloadId;
    }

    /**
     * @return \ReceiptValidator\iTunes\ReceiptResponse[]
     */
    public function getInApp()
    {
        return $this->inApp;
    }

    /**
     * @param array $inApp
     */
    public function setInApp($inApp)
    {
        $this->inApp = $inApp;
    }

    /**
     * @return string
     */
    public function getIsTrialPeriod()
    {
        return $this->isTrialPeriod;
    }

    /**
     * @param string $isTrialPeriod
     */
    public function setIsTrialPeriod($isTrialPeriod)
    {
        $this->isTrialPeriod = $isTrialPeriod;
    }

    /**
     * The is_trial_period is actually a string so it is deserialized into a string that contains
     * either "false" or "true", here is a method that returns an actual boolean.
     *
     * @return bool
     */
    public function isTrialPeriod()
    {
        return $this->getIsTrialPeriod() === "true";
    }
}
