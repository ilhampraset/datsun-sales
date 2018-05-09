<template>
	<div>

			<div align="center" style="padding-top:50px">

				<a  v-for='contact in contacts' :href="'https://api.whatsapp.com/send?phone=' + contact.nomer"  >
					<img  src="img/1499955335whatsapp-icon-logo-png.png">
						{{contact.nomer}}
				</a>
	
			</div>

	</div>	
</template>

<script>
	export default {

		data() {

			return {

				contacts : [
						
						{'nomer' : '0813269044690'}, 
						{'nomer' : '08987880493'} ]
			}
			
		},

		methods : {

				urlWa : (nomer) => {

					let url = 'https://api.whatsapp.com/send?phone=nomer'
					this.href=url
				}
		},
	}
</script>

<style scoped>
	
	img {

		width: 70px;
		height: 70px;
	}
</style>
