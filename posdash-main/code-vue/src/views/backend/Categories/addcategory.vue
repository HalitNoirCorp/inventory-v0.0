<template>
      <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add category</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form   @submit.prevent="submit" >
                            <div class="row">                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control image-file" name="pic" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label for="productname">Product Name *</label>
                                        <input type="text" :class="`form-control ${$v.productname.$error ? 'is-invalid' : ''}`" id="productname" v-model="productname" @input="$v.productname.$touch()" @blur="$v.productname.$touch()" placeholder="Enter Product Name" >
                                       <div class="help-block with-errors invalid-feedback">
                                             Please fill in this field.
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category *</label>
                                        <VueSelectPicker :options="option3" class="form-control selectpicker" v-model="selectValue" label="Beauty" />
                                    </div>
                                </div>  
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label  for="Code">Code *</label>
                                        <input type="text" :class="`form-control ${$v.Code.$error ? 'is-invalid' : ''}`" id="Code" v-model="Code" @input="$v.Code.$touch()" @blur="$v.Code.$touch()" placeholder="Enter Code" >
                                        <div class="help-block with-errors invalid-feedback">
                                             Please fill in this field.
                                        </div>
                                    </div>
                                </div>                                 
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Add category</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</template>
<script>
import { validationMixin } from 'vuelidate'
import { required 	} from 'vuelidate/lib/validators'
export default {
    name:'AddCategory',
     mixins: [validationMixin],
    validations: {
      productname: { required },
      Code: { required },
    },
    data(){
        return{
            productname:'',
            Code:'',
            selectValue: '',
            option3: [
                {value: 1, text: 'Beauty'},
                {value: 2, text: 'Grocery'},
                {value: 3, text: 'Food'},
                {value: 4, text: 'Furniture'},
                {value: 5, text: 'Shoes'},
                {value: 6, text: 'Frames'},
                {value: 7, text: 'Jewellery'},
            ],
        }
        
    },
     methods: {
        submit() {
            this.$v.$touch()
            if (this.$v.$invalid) {
            this.submitStatus = true
            window.scrollTo({ top: 0, behavior: 'smooth' });
            }else{
            this.submitStatus = false
             this.$router.push({name: 'category.listcategory'})
            }
        }}
}
</script>
