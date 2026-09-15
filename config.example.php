<?php
/**
 * Copy to `config.php` (never commit the real file) and fill in the values.
 */

return array(
    // TropaTT CRM gateway (Ingestion API prefix).
    'gateway_url' => 'https://crm.example.com/api/index.php?route=/_module/crm.ecommerce-gateway/v1',

    // Store credentials from the CRM store card.
    'store_key' => 'stk_...',
    'store_secret' => '...',

    // Secret token configured in the Tilda cart webhook (checked before the order is accepted).
    'tilda_secret' => 'change-me',

    // Optional CIDR allowlist for the webhook endpoint (empty = allow any IP).
    'allowed_ips' => array(),

    // Tilda Store API key (Tilda → Настройки → API) for the stock/price sync.
    'tilda_store_api_key' => '',

    // Stock source for cron/sync_stock.php (a JSON file path or an HTTPS URL).
    'stock_source' => '',

    // CRM stage code sent for a new Tilda order.
    'default_stage' => 'new',

    // Diagnostics.
    'debug' => false,
    'log_file' => __DIR__ . '/var/connector.log',
    'queue_dir' => __DIR__ . '/var/queue',
);
