<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCryptoWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         *
         "Id": "2431",
            "Name": "Bitstamp",
            "Url": "/exchanges/bitstamp/overview",
            "LogoUrl": "/media/34478497/bitstamp.jpg",
            "ItemType": [
                "Cryptocurrency",
                "Fiat"
            ],
            "CentralizationType": "Centralized",
            "InternalName": "Bitstamp",
            "GradePoints": "71",
            "Grade": "A",
            "GradePointsSplit": {
                "Legal": "16.3",
                "Investment": "5",
                "Team": "6.9",
                "DataProvision": "13.1",
                "TradeMonitoring": "5",
                "MarketQuality": "11.9",
                "Security": "13.2",
                "NegativeReportsPenalty": "0"
            },
            "AffiliateURL": "https://www.bitstamp.net/",
            "Country": "United Kingdom",
            "OrderBook": true,
            "Trades": true,
            "Description": "Ever since it opened its doors in 2011, Bitstamp has provided a reliable gateway into the crypto universe for individuals and institutions worldwide.\nIt is Europe’s biggest exchange by trading volume and offers trading of BTC, ETH, LTC, BCH and XRP paired with USD, EUR, and BTC. Beginners can purchase crypto with credit cards, while experienced traders can use a range of order types and analytical tools.\nThe exchange is a pioneer in crypto security and regulation, having developed a number of best practices for the industry, like cold storage of assets, multisig wallets and segwit implementation. With a mature approach to the industry, Bitstamp serves as the bridge between traditional finance and crypto.",
            "FullAddress": "Bitstamp Ltd\n5 New Street Square\nLondon EC4A 3TW United Kingdom",
            "Fees": "Fee %\t30 days USD volume\n0.25%\t< $20,000\n0.24%\t< $100,000\n0.22%\t< $200,000\n0.20%\t< $400,000\n0.15%\t< $600,000\n0.14%\t< $1,000,000\n0.13%\t< $2,000,000\n0.12%\t< $4,000,000\n0.11%\t< $20,000,000\n0.10%\t> $20,000,000\n\nFEE ROUNDING \nThe fees are calculated to two decimal places, all fees which might exceed this limitation are rounded up. The rounding up is executed in such a way that the second decimal digit is always one digit value higher than it was before the rounding up. For example; a fee of 0.111 will be charged as 0.12. The minimum allowable trade is $5 USD.",
            "DepositMethods": "SEPA\nAstropay\nBitcoin\nLitecoin\nCredit Card\neCheck\nInternational Wire Transfer\nRipple\n\nHOW LONG DOES DEPOSIT USUALLY TAKE?\nA bank wire transfer typically takes 2-5 business days to reach our account. SEPA deposits must go through additional step of converting funds to USD, which can in some cases delay deposit for additional day. International deposits are processed and credited right upon receiving.\n\nCAN I DEPOSIT FUNDS FROM A BANK ACCOUNT OTHER THAN MY OWN?\nAll transfers to and from your Bitstamp account must be paid from or be received by a bank account hold in your name.\n\nI HAVE AN ACCOUNT AT AN EU BANK. CAN I DEPOSIT USD THROUGH SEPA?\nPlease note that all SEPA transfers are strictly denominated in EUR. We will receive SEPA transfers in EUR and will convert them to USD according to our bank exchange rates.\n\nHOW LONG DO I NEED TO WAIT FOR MY BITCOIN DEPOSIT?\nAt least 3 network confirmations, it may take up to 1 hour for the bitcoin network to confirm the transaction.\n\nWHAT IS AN ECHECK?\nAn eCheck is a direct debit from a customer bank account that is then deposited into his Bitstamp account.\n\nHOW LONG DOES AN ECHECK TAKE TO CREDIT?\nIt usually takes between 2 and 5 business days.\n\nWHO CAN USE ECHECK?\nThe service is currently available only for Canadian residents.\n\nHOW CAN I USE ECHECK?\nYou can find eCheck under the deposit section. Where you first have to register and afterwards add your bank account details. Once the bank account is verified through a micro deposit you are good to go!",
            "WithdrawalMethods": "SEPA: 0.90 EUR\nBank Transfer\nInternational Wire Transfer\nBitcoin\nLitecoin\nRipple\nDebit Card\nGold\n\nWHO PAYS THE WITHDRAWAL FEE?\nNot regarding to withdrawal method, a fee will be displayed before executing the withdrawal and deducted from amount. SEPA withdrawals are charged with fixed 0.90€ fee once your funds are converted to EUR. Minimum amount for SEPA withdrawal is $10.00. International withdrawals are charged with 0.09% fee, minimum fee is $15.00. Minimum amount for international withdrawal is $50.00.\n\nHOW LONG DOES WITHDRAWAL USUALLY TAKE?\nSEPA zone transfers usually take 2-3 business days. For clients outside SEPA zone it takes up to 5 business days.\n\nWHAT IS A THIRD PARTY WITHDRAWAL?\nThird party withdrawals are defined as those withdraws which are meant to be transferred to account or financial institution that is titled in a name that is different from registered Bitstamp account. Transfers to corporate bank accounts may require further KYC checking.",
            "Sponsored": false,
            "Recommended": false,
            "Rating": {
                "One": 99,
                "Two": 19,
                "Three": 14,
                "Four": 24,
                "Five": 58,
                "Avg": 2.6,
                "TotalUsers": 214
            },
            "SortOrder": "3",
            "TOTALVOLUME24H": {
                "BTC": 8831.41089921852,
                "USD": 88980703.88685821
            },
            "DISPLAYTOTALVOLUME24H": {
                "BTC": "Ƀ 8.83 K",
                "USD": "$ 88.98 M"
            }
         *
         * 
         */
        /*Schema::create('crypto_wallet', function (Blueprint $table) {
            $table->increments('id');
            // $table->
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('crypto_wallet');
    }
}
