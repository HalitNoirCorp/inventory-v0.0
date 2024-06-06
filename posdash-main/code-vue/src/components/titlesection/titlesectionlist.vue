<template>
    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
        <div>
            <h4 class="mb-3">{{title}}</h4>
            <p class="mb-0">{{desc1}}<br> {{desc2}}</p>
        </div>
        <router-link :to="link" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>{{linktext}}</router-link>
    </div>
</template>
<script>
export default {
    name:'titlesectionlist',
    props:{
       title:{type:String,default:''},
       desc1:{type:String,default:''},
       desc2:{type:String,default:''},
       link:{type:Object},
       linktext:{type:String,default:''},
    }
}
</script>