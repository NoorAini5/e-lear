<div>
    <label class="radio-inline">
        <input required="" type="radio" name="{{ $name }}" id="gender-L" value="laki-laki" aria-required="true" class="valid" {{ old($name) == 'laki-laki' ? "checked" : (isset($selected) && $selected == 'laki-laki' ? "checked" : null ) }}>
        <span class="ml-1">Laki-laki</span>
    </label>
    <label class="radio-inline ml-5">
        <input required="" type="radio" name="{{ $name }}" id="gender-P" value="perempuan" aria-required="true" class="valid" {{ old($name) == 'perempuan' ? "checked" : (isset($selected) && $selected == 'perempuan' ? "checked" : null ) }}>
        <span class="ml-1">Perempuan</span>
    </label>
</div>
