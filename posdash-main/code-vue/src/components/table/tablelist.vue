<template>
    <div>
         <table id="datatable"  class="data-table table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                          <slot name="header"/>
                    </thead>
                    <tbody class="ligth-body">
                          <slot name="body"/>
                    </tbody>
                </table>
    </div>
</template>
<script>
import { core } from '../../config/pluginInit'
export default {
    name:'tablelist',
    mounted(){
        core. initDataTable()
    }
}
</script>