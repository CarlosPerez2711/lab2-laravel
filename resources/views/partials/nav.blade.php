<thead class="table table-bordered">
    <tr>
        <td class="@if(request()->routeIs('home')) activo @endif"><a href="{{ route('home') }}">Home</a></td>
        <td class="@if(request()->routeIs('nosotros')) activo @endif"><a href="{{ route('nosotros') }}">Nosotros</a></td>
        <td class="@if(request()->routeIs('servicios')) activo @endif"><a href="{{ route('servicios') }}">Servicios</a></td>
        <td class="@if(request()->routeIs('contacto')) activo @endif"><a href="{{ route('contacto') }}">Contacto</a></td>
    </tr>
</thead>