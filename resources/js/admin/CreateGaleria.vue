<template>
<div class="">
    <section class="content-header">
      <h1>
        Galeria
        <small>Crear</small>
      </h1>
      <ol class="breadcrumb">
        <li>
          <router-link to="/dashboard">
            <i class="fa fa-dashboard" ></i>Dashboard
          </router-link>
        </li>
        <li>
        <router-link to="/suscripcion/lista">
          <i class="fa fa-book" ></i>Galeria
        </router-link>
        </li>
        <li class="active" ><i class="fa fa-pencil"></i>Subir</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
      <!-- Main content -->
      <section class="content">
    <form @submit.prevent="crearProducto">
      <div class="row">
        <!-- left column -->
        <div class="col-md-7">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear producto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form @submit.prevent="createProduct">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" v-model="form.name" required   placeholder="Ingresar nombre la imagen">
                </div>
                <div class="form-group col-md-6">
                  <label>Ubicación</label>
                  <select class="form-control" @change="getCategories" required v-model="form.marca"  >
                    <option value="">Home</option>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Imagen</label>
                  <input type="file" id="file" required ref="file" @change="img"  class="form-control">
                  <!-- <small>Tamaño 689 x 689</small> -->
                </div>
                
                <div class="form-group col-md-12">
                  <label for="exampleInputPassword1">Descripcion</label>
                  <textarea  class="form-control" v-model="form.description" rows="5" cols="80"></textarea>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" :disabled="enviando" >
                  <span v-if="enviando">Creando...</span>
                  <span v-else>Crear producto</span>
                </button>
              </div>
              </form>
              <!-- /.box-body -->
          </div>
        </div>
        <!--/.col (left) -->
        <!-- right column -->


        <!--/.col (right) -->
      </div>
    </form>
  </section>
  <!-- /.content -->
  </section>
</div>
</template>

<script>
import toastr from 'toastr'
toastr.options ={
  "closeButton": true,
  "timeOut": "10000",
  // "progressBar": true,
};
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            enviando:false,
            marcas:[],
            categories:[],
            subcategories:[],
            form:{
              marca:'',
              name:'',
              subcategory:'',
              category:'',
              image:'',
              archivo:'',
              description:''
            }

          }
        },
        created(){
          axios.get('api/marcas').then(res =>{
              this.marcas = res.data;
          });
        },
        methods:{
          getCategories(){
            axios.get('api/categories/'+this.form.marca).then(res =>{
                this.categories = res.data;
            });

          },
          getsubcategory(){
            axios.get('api/subcategories/'+this.form.category).then(res =>{
                this.subcategories = res.data;
            });

          },
          img(event){
            this.form.image = this.$refs.file.files[0];
          },
          archivo(event){
            this.form.archivo = this.$refs.archivo.files[0];
          },
          createProduct(){
            let fd = new FormData();
            fd.append('marca',this.form.marca);
            fd.append('name',this.form.name);
            fd.append('subcategory',this.form.subcategory);
            fd.append('category',this.form.category);
            fd.append('image',this.form.image);
            fd.append('archivo',this.form.archivo);
            fd.append('description',this.form.description);

            axios.post('api/product/create',
                fd,{
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  }
              }).then(res=>{
                this.form = {
                  marca:'',
                  name:'',
                  subcategory:'',
                  category:'',
                  image:'',
                  archivo:'',
                  description:''
                }
              toastr.success('Producto creado correctamente');

            });

          }


        }
    }
</script>
