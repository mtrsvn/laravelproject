 @props(['active'=>false, 'type'])

 <a class="{{ $active ? 'active' : '' }}" {{ $attributes }}>
   {{ $slot }}
</a>
