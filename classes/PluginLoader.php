<?php
namespace AppZap\PHPFrameworkAirbrake;

use AppZap\PHPFramework\Bootstrap;
use AppZap\PHPFramework\SignalSlot\Dispatcher as SignalSlotDispatcher;

class PluginLoader {
  public function __construct() {
    SignalSlotDispatcher::registerSlot(
        Bootstrap::SIGNAL_PLUGINSLOADED,
        ['AppZap\\PHPFrameworkAirbrake\\ExceptionLogger', 'initialize']
    );
  }
}
