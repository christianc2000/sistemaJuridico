@props(['size' => 35, 'color' => 'gray'])
<!-- para enviar utilizar una variable en el components-->
@php
switch ($color) {
    case 'gray':
        $col = "#374151";
        break;
    case 'white':
        $col = "#ffffff";
        break;

    default:
        $col = "#374151";
        break;
}
@endphp

<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="{{ $size }}" height="{{ $size }}"
    viewBox="0 0 172 172" style=" fill:#000000;">
    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
        <path d="M0,172v-172h172v172z" fill="none"></path>
        <g fill="{{ $col }}">
            <path
                d="M72.24,10.32c-32.26344,0 -58.48,26.21656 -58.48,58.48c0,32.26344 26.21656,58.48 58.48,58.48c12.76563,0 24.56375,-4.11187 34.185,-11.0725l45.2575,45.15l9.675,-9.675l-44.72,-44.8275c8.78813,-10.23937 14.0825,-23.52906 14.0825,-38.055c0,-32.26344 -26.21656,-58.48 -58.48,-58.48zM72.24,17.2c28.54125,0 51.6,23.05875 51.6,51.6c0,28.54125 -23.05875,51.6 -51.6,51.6c-28.54125,0 -51.6,-23.05875 -51.6,-51.6c0,-28.54125 23.05875,-51.6 51.6,-51.6z">
            </path>
        </g>
    </g>
</svg>
