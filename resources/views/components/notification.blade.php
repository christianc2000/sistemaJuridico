@props(['size' => 30, 'color' => 'gray'])

@php
switch ($color) {
    case 'gray':
        $col="#374151";
        break;
    case 'white':
        $col="#ffffff";
        break;

    default:
        $col="#374151";
        break;
}
@endphp

<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="{{ $size }}" height="{{ $size }}"
    viewBox="0 0 172 172" style=" fill:#000000;">
    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
        <path d="M0,172v-172h172v172z" fill="none"></path>
        <g fill="{{$col}}">
            <path
                d="M86,14.33333c-5.934,0 -10.75,4.816 -10.75,10.75v4.98307c-18.53885,4.77861 -32.25,21.56799 -32.25,41.60026v43l-11.00195,8.28646h-0.014c-2.06676,1.31602 -3.31796,3.59669 -3.31738,6.04688c0,3.95804 3.20863,7.16667 7.16667,7.16667h50.16667h50.16667c3.95804,0 7.16667,-3.20863 7.16667,-7.16667c0.00058,-2.45018 -1.25062,-4.73086 -3.31739,-6.04687l-11.01595,-8.28646v-43c0,-20.03227 -13.71115,-36.82165 -32.25,-41.60026v-4.98307c0,-5.934 -4.816,-10.75 -10.75,-10.75zM71.66667,143.33333c0,7.88333 6.45,14.33333 14.33333,14.33333c7.88333,0 14.33333,-6.45 14.33333,-14.33333z">
            </path>
        </g>
    </g>
</svg>
