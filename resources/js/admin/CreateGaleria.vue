<template>
<div class="">
    <section class="content-header">
      <h1>
        Galeria
        <small>Crear</small>
      </h1>
      <ol class="breadcrumb">
        <li>
         
            <i class="fa fa-dashboard" ></i>Dashboard
          
        </li>
        <li>
        
          <i class="fa fa-book" ></i>Galeria
        
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
              <h3 class="box-title">Subir Imagen</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form @submit.prevent="createProduct">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" v-model="form.nombre" required   placeholder="Ingresar nombre la imagen">
                </div>
                <div class="form-group col-md-6">
                  <label>Ubicación</label>
                  <select class="form-control"  required v-model="form.ubicacion"  >
                    <option value="">Seleccione...</option>
                    <option value="Home">Home</option>
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
                  <span v-if="enviando">Subiendo...</span>
                  <span v-else>Subir Imagen</span>
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
            form:{
              nombre:'',
              ubicacion:'',
              descripcion:'',
              image:'',
             
            }

          }
        },
        created(){
          
        },
        methods:{
          img(event){
            this.form.image = this.$refs.file.files[0];
          },
          createProduct(){
            let fd = new FormData();
            fd.append('nombre',this.form.nombre);
            fd.append('ubicacion',this.form.ubicacion);
            fd.append('descripcion',this.form.descripcion);
            fd.append('image',this.form.image);

            axios.post('api/galeria/create',
                fd,{
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  }
              }).then(res=>{
                console.log(res.data);
                this.form = {
                  
                  
                  // nombre:'',
                  // ubicacion:'',
                  // subcategory:'',
                  // descripcion:'',
                  // image:'',
                  
                }
              toastr.success('Imagen subida correctamente');

            });

          }


        }
    }
</script>
