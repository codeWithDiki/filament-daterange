<x-forms::field-wrapper 
:id="$getId()" 
:label="$getLabel()" 
:label-sr-only="$isLabelHidden()" 
:helper-text="$getHelperText()" 
:hint="$getHint()" 
:hint-icon="$getHintIcon()" 
:required="$isRequired()" 
:state-path="$getStatePath()">

    <div x-data="{ 
        state: $wire.entangle('{{ $getStatePath() }}'),
        initDateRange() {
            window.jquery('#{{ $getId() }}').daterangepicker({
                    opens: '{{ $getOpen() }}'
                }, (start, end, label) => this.state = start.format('{{ $getDateFormat() }}')+' {{ $getDateSeparatorFormat() }} '+end.format('{{ $getDateFormat() }}'));
        },
        openDateRange() {
            this.initDateRange();
        },
     }" x-init="openDateRange()">
        <input 
        x-model="state"
        autocomplete="off"
        id="{{ $getId() }}"
        class="py-2 px-3 border block w-full transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 disabled:opacity-70"
        />
    </div>

</x-forms::field-wrapper>