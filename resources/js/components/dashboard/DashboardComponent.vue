<template>

    <div class="container">
        <br>
        <widget-layout></widget-layout>
    </div>

</template>


<script>

    import WidgetLayout from './WidgetComponent.vue';

    export default{
        name  : 'dashboard-layout',
        components : {
            WidgetLayout
        }

    }


</script>
