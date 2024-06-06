<template>
	<div class="container-fluid add-form-list">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header d-flex justify-content-between">
						<div class="header-title">
							<h4 class="card-title">Add Sale</h4> </div>
					</div>
					<div class="card-body">
						<form @submit.prevent="submit">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Date *</label>
										<input type="text" class="form-control" placeholder="Date"> </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="referenceno">Reference No *</label>
										<input type="text" :class="`form-control ${$v.referenceno.$error ? 'is-invalid' : ''}`" id="referenceno" v-model="referenceno" @input="$v.referenceno.$touch()" @blur="$v.referenceno.$touch()" placeholder="Enter Reference No">
										<div class="invalid-feedback"> Please fill in this field. </div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Biller *</label>
										<VueSelectPicker :options="option1" class="form-control selectpicker" v-model="selectValue" label="Test Biller" /> </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="customer">Customer *</label>
										<input type="text" :class="`form-control ${$v.customer.$error ? 'is-invalid' : ''}`" id="customer" v-model="customer" @input="$v.customer.$touch()" @blur="$v.customer.$touch()" placeholder="Enter Customer Name">
										<div class="invalid-feedback"> Please fill in this field. </div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Order Tax *</label>
										<VueSelectPicker :options="option3" class="form-control selectpicker" v-model="selectValue" label="No Text" /> </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Order Discount</label>
										<input type="text" class="form-control" placeholder="Discount"> </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Shipping</label>
										<input type="text" class="form-control" placeholder="Shpping"> </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Attach Document</label>
										<input type="file" class="form-control image-file" name="pic" accept="image/*"> </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Sale Status *</label>
										<VueSelectPicker :options="option2" class="form-control selectpicker" v-model="selectValue" label="Completed" /> </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Payment Status *</label>
										<VueSelectPicker :options="option4" class="form-control selectpicker" v-model="selectValue" label="Pending" /> </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Sale Note *</label>
										<vue-editor :editorToolbar="customToolbar" placeholder="Compose an epic..."></vue-editor>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary mr-2">Add Sale</button>
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
import { VueEditor } from 'vue2-editor'
export default {
    name:'AddSale',
      mixins: [validationMixin],
    validations: {
      customer: { required },
      referenceno: { required },
      },
      components:{
       VueEditor,
    },
    data(){
        return{
            referenceno:'',
            customer:'',
            selectValue:'',
            option1:[
                  {value: 1, text: 'Test Biller'},
                  ],
                   option2:[
                  {value: 1, text: 'Completed'},
                  {value: 2, text: 'Pending'},
                  ],
                   option3:[
                  {value: 1, text: 'No Text'},
                  {value: 2, text: 'GST @5%'},
                  {value: 2, text: 'VAT @10%'},
                  ],
                   option4:[
                  {value: 1, text: 'Pending'},
                  {value: 2, text: 'Due'},
                  {value: 2, text: 'Paid'},
                  ],
                   customToolbar: [["bold",  "underline","italic","image","code"]]
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
             this.$router.push({name: 'sale.listsale'})
            }
        }}
}
</script>
<style>
#quill-container{
    height: 50px;
}
#quill-container .ql-editor{
    min-height: unset;
}
</style>