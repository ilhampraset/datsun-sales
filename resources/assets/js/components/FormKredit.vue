<template>
	<div>
		<div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 ">
              
               <div class="form-group">
			    	<label class="control-label col-sm-5">Model :</label>
				    <div class="col-sm-12 col-md-12 col-xs-12 ">
				   		<select class="form-control" id="unit" 
				   				v-model='selectedModel'>
				   				<option v-for='model in models' 
				   						:value='model.value'>{{model.nama}} 
				   				</option>
		
				   		</select>
				    </div>
			    </div>

			    <div class="form-group">
			    	<label class="control-label col-sm-5">Variant :</label>
				    <div class="col-sm-12 col-md-12 col-xs-12 ">
				   		<select class="form-control" id="variant" 
				   				v-model='selectedVariant'>

				   			<option  v-for="variant in variants" 
				   					 v-if='variant.model_id == selectedModel' :value='variant.value'> {{variant.nama}} 
				   			</option>

		
				   			
				   		</select>
				    </div>
		  		</div>

		  		<div class="form-group">
			    	<label class="control-label col-sm-5">Harga :</label>
			    	<div class="col-sm-12 col-md-12 col-xs-12 ">
					     <input  v-for='harga in harga' 
					     		v-if='harga.variant_id == selectedVariant'
					     		type="text" class="form-control right-text" id='harga' placeholder="Harga" 
					     		:value='convertRupiah(harga.nilai)' readonly>
				    </div>

		  		</div>

            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 ">
              
		  		

		  		<div class="form-group">
			    	<label class="control-label col-sm-5">Tenor :</label>
				    <div class="col-sm-12 col-md-12 col-xs-12 ">
				   		<select class="form-control" id="tenor" 
				   				v-model='selectedTenor'>

				   			<option  v-for="tenor in tenor" :value='tenor.value'> {{tenor.ten}} </option>
				   			
				   		</select>
				    </div>
		  		</div>

		  		<div class="form-group">
			    	<label class="control-label col-sm-5">Down Paymen(DP) :</label>
			    	<div class="col-sm-12 col-md-12 col-xs-12 ">
					     <money v-model="dp"
				         v-bind="money"
				         class="form-control right-text">
				         </money>
				    </div>

		  		</div>

		  		<div class="form-group">
			    	<label class="control-label col-sm-5">Angsuran :</label>
			    	<div class="col-sm-12 col-md-12 col-xs-12 ">
					     <input 
					     		type="text" class="form-control right-text" id='harga' placeholder="Harga" 
					     		:value='convertRupiah(total)' readonly>
				    </div>

		  		</div>  
            </div>

        </div>

       
       <contact></contact>
	</div>

</template>

<script>
	export default {
		data() {

			return {
				models : [],
				variants : [],
				harga : [],
				tenor : [],
				selectedModel : '1',
				selectedVariant: '1',
				selectedTenor: '1',
				dp : '',
		        money: {
		          decimal: ',',
		          thousands: '.',
		          prefix: 'Rp ',
		          suffix: '',
		          precision: 0,
		          masked: false 
		        }
			}
			
		},
		created() {

			
				this.models = [
					
					{'nama' : 'Datsun Go', 'value' : 1},
					{'nama' : 'Datsun Go+', 'value' : 2},
					{'nama' : 'Datsun Cross', 'value' : 3}  					
				],
				this.variants = [

					{'nama' : 'ALL NEW DATSUN GO D - MT', 'value' : 1, 'model_id' : 1 },
					{'nama' : 'ALL NEW DATSUN GO D - AT', 'value' : 2, 'model_id' : 1 },
					{'nama' : 'ALL NEW DATSUN GO+ D - AT', 'value' : 3, 'model_id' : 2 },
					{'nama' : 'ALL NEW DATSUN Cross ', 'value' : 4, 'model_id' : 3 }
				],
				this.harga = [

					{'nilai' : '102990000', 'variant_id' : 1},
					{'nilai' : '120990000', 'variant_id' : 2},
					{'nilai' : '140990000', 'variant_id' : 3},
					{'nilai' : '180990000', 'variant_id' : 4}
				],
				this.tenor = [

					{'ten' : 36, 'value' : 1},
					{'ten' : 48, 'value' : 2},
					{'ten' : 60, 'value' : 3},
					{'ten' : 72, 'value' : 4},
					{'ten' : 84, 'value' : 5},
				];
		},
		computed: {

			 total: function () {

			    let model = this.$data.models 
			    let tenor = this.$data.tenor
			    let harga = this.$data.harga
			    let price
			    for(let i = 0 ; i < tenor.length; i++){

			    	if(tenor[i].value == this.selectedTenor)
			    	{
			    		for(let a = 0; a < harga.length; a++) {

			    			if(harga[a].variant_id == this.selectedVariant) {

			    				price = (harga[a].nilai - this.dp)  / tenor[i].ten

			    			}
			    		}
			    		
			    	} 
			    }

			    return parseInt(price)

			    
			  }
		},
		methods: {

			convertRupiah : (angka) => {

				var rupiah = '';		
				var angkarev = angka.toString().split('').reverse().join('');
				for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
				return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
			}
		}
	}
</script>



<style scoped>
	label {
		font-weight: bold;

	}

	.right-text { 

		text-align: right;
	 }
	
</style>