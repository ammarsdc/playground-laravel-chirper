@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img
                    src="https://www.bwtms.com.my/wp-content/uploads/2023/11/cropped-BWTMS_Logo_FA__Full_Color_-removebg-preview.png"
                    class="logo" alt="BWTMS Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
