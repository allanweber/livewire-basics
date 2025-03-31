<div>
   Count {{ $count }}
   <button wire:click.throttle.1000ms="increment">+</button>
   <button wire:click.throttle.1000ms="incrementBy(2)">+2</button>
</div>
