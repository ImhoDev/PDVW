@extends('layoutlte')
@section('title', 'Plantilla adminLTE')
@section('content_header', '<h1>bienvenido a plantilla</h1>')
@section('content')
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <x-jet-section-border />
                <div class="mt-10 sm:mt-0">
                    Actualizar contraseñaaa
                </div>
                <x-jet-section-border />
                <div class="mt-10 sm:mt-0">
                  dividier
                </div>
                <x-jet-section-border />
                <div class="mt-10 sm:mt-0">
                  Porrr
                </div>
                <x-jet-section-border />
                <div class="mt-10 sm:mt-0">
                    editar todo
                </div>
                {{-- Minimal --}}
<x-adminlte-button label="Button"/>

{{-- Disabled --}}
<x-adminlte-button label="Disabled" theme="dark" disabled/>

{{-- Themes + icons --}}
<x-adminlte-button label="Primary" theme="primary" icon="fas fa-key"/>
<x-adminlte-button label="Secondary" theme="secondary" icon="fas fa-hashtag"/>
<x-adminlte-button label="Info" theme="info" icon="fas fa-info-circle"/>
<x-adminlte-button label="Warning" theme="warning" icon="fas fa-exclamation-triangle"/>
<x-adminlte-button label="Danger" theme="danger" icon="fas fa-ban"/>
<x-adminlte-button label="Success" theme="success" icon="fas fa-thumbs-up"/>
<x-adminlte-button label="Dark" theme="dark" icon="fas fa-adjust"/>

{{-- Types --}}
<x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
<x-adminlte-button class="btn-lg" type="reset" label="Reset" theme="outline-danger" icon="fas fa-lg fa-trash"/>
<x-adminlte-button class="btn-sm bg-gradient-info" type="button" label="Help" icon="fas fa-lg fa-question"/>

{{-- Icons Only --}}
<x-adminlte-button theme="primary" icon="fab fa-fw fa-lg fa-facebook-f"/>
<x-adminlte-button theme="info" icon="fab fa-fw fa-lg fa-twitter"/>
        </div>
    </div>
    <div>
        {{-- Minimal --}}
<x-adminlte-input name="iBasic"/>

{{-- Email type --}}
<x-adminlte-input name="iMail" type="email" placeholder="mail@example.com"/>

{{-- With label, invalid feedback disabled and form group class --}}
<div class="row">
    <x-adminlte-input name="iLabel" label="Label" placeholder="placeholder"
        fgroup-class="col-md-6" disable-feedback/>
</div>

{{-- With prepend slot --}}
<x-adminlte-input name="iUser" label="User" placeholder="username" label-class="text-lightblue">
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fas fa-user text-lightblue"></i>
        </div>
    </x-slot>
</x-adminlte-input>

{{-- With append slot, number type and sm size --}}
<x-adminlte-input name="iNum" label="Number" placeholder="number" type="number"
    igroup-size="sm" min=1 max=10>
    <x-slot name="appendSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-hashtag"></i>
        </div>
    </x-slot>
</x-adminlte-input>

{{-- With a link on the bottom slot and old support enabled --}}
<x-adminlte-input name="iPostalCode" label="Postal Code" placeholder="postal code"
    enable-old-support>
    <x-slot name="prependSlot">
        <div class="input-group-text text-olive">
            <i class="fas fa-map-marked-alt"></i>
        </div>
    </x-slot>
    <x-slot name="bottomSlot">
        <a href="#">Search your postal code here</a>
    </x-slot>
</x-adminlte-input>

{{-- With extra information on the bottom slot --}}
<x-adminlte-input name="iExtraAddress" label="Other Address Data">
    <x-slot name="prependSlot">
        <div class="input-group-text text-purple">
            <i class="fas fa-address-card"></i>
        </div>
    </x-slot>
    <x-slot name="bottomSlot">
        <span class="text-sm text-gray">
            [Add other address information you may consider important]
        </span>
    </x-slot>
</x-adminlte-input>

{{-- With multiple slots and lg size --}}
<x-adminlte-input name="iSearch" label="Search" placeholder="search" igroup-size="lg">
    <x-slot name="appendSlot">
        <x-adminlte-button theme="outline-danger" label="Go!"/>
    </x-slot>
    <x-slot name="prependSlot">
        <div class="input-group-text text-danger">
            <i class="fas fa-search"></i>
        </div>
    </x-slot>
</x-adminlte-input>
    </div>
    <div>
        {{-- Minimal --}}
<x-adminlte-input-file name="ifMin"/>

{{-- Placeholder, sm size and prepend icon --}}
<x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-lightblue">
            <i class="fas fa-upload"></i>
        </div>
    </x-slot>
</x-adminlte-input-file>

{{-- With label and feedback disabled --}}
<x-adminlte-input-file name="ifLabel" label="Upload file" placeholder="Choose a file..."
    disable-feedback/>

{{-- With multiple slots and multiple files --}}
<x-adminlte-input-file id="ifMultiple" name="ifMultiple[]" label="Upload files"
    placeholder="Choose multiple files..." igroup-size="lg" legend="Choose" multiple>
    <x-slot name="appendSlot">
        <x-adminlte-button theme="primary" label="Upload"/>
    </x-slot>
    <x-slot name="prependSlot">
        <div class="input-group-text text-primary">
            <i class="fas fa-file-upload"></i>
        </div>
    </x-slot>
</x-adminlte-input-file>
    </div>
@endsection