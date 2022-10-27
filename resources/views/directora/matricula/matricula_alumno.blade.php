@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full bg-grey-lightest" style="padding-top: 4rem;">
    <div class="container mx-auto py-8 flex">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <div class="py-4 px-8 text-black text-2xl border-b border-grey-lighter font-bold ">Matrícula</div>
            <div class="py-4 px-8">
                <h2 class="text-lg text-gray-700 font-semibold">Información Necesaria del Apoderado</h2>
                <form action="{{route('alumno.store')}}" method="POST">                    
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rut_apoderado">RUT del Apoderado</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('rut_apoderado') border-red-500 @enderror"
                            value="{{old('rut_apoderado')}}"
                            placeholder="12345678-9"
                            id="rut_apoderado"
                            name="rut_apoderado"
                            />
                            @error('rut_apoderado')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <h2 class="text-lg text-gray-700 font-semibold">Información Personal del Alumno</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rut">RUT</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('rut') border-red-500 @enderror"
                            value="{{old('rut')}}"
                            id="rut"
                            name="rut"
                            placeholder="12345678-9"
                            />
                            @error('rut')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nro_documento">Número de Documento</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('nro_documento') border-red-500 @enderror"
                            value="{{old('nro_documento')}}"
                            id="nro_documento"
                            name="nro_documento"
                            placeholder="Número de Documento"
                            />
                            @error('nro_documento')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombres</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none"
                            id="nombre"
                            name="nombre"
                            placeholder="Nombres"
                            />
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="ap_paterno">Apellido Paterno</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('ap_paterno') border-red-500 @enderror"
                            value="{{old('ap_paterno')}}"
                            id="ap_paterno"
                            name="ap_paterno"
                            placeholder="Apellido Paterno"
                            />
                            @error('ap_paterno')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="ap_materno">Apellido Materno</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('ap_materno') border-red-500 @enderror"
                            value="{{old('ap_materno')}}"
                            id="ap_materno"
                            name="ap_materno"
                            placeholder="Apellido Materno"
                            />
                            @error('ap_materno')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="fecha_nac">Fecha de Nacimiento</label>
                            <input type="date" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('fecha_nac') border-red-500 @enderror"
                            value="{{old('fecha_nac')}}"
                            id="fecha_nac"
                            name="fecha_nac"
                            placeholder="Fecha de Nacimiento"
                            />
                            @error('fecha_nac')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="ciudad_nac">Ciudad de Nacimiento</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('ciudad_nac') border-red-500 @enderror"
                            value="{{old('ciudad_nac')}}"
                            id="ciudad_nac"
                            name="ciudad_nac"
                            placeholder="Ciudad de Nacimiento"
                            />
                            @error('ciudad_nac')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nacionalidad">Nacionalidad</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('nacionalidad') border-red-500 @enderror"
                            value="{{old('nacionalidad')}}"
                            id="nacionalidad"
                            name="nacionalidad"
                            placeholder="Nacionalidad"
                            />
                            @error('nacionalidad')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="domicilio">Domicilio</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('domicilio') border-red-500 @enderror"
                            value="{{old('domicilio')}}"
                            id="domicilio"
                            name="domicilio"
                            placeholder="Domicilio"
                            />
                            @error('domicilio')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="edad">Edad</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('domicilio') border-red-500 @enderror"
                            value="{{old('edad')}}"
                            id="edad"
                            name="edad"
                            placeholder="Edad"
                            />
                            @error('edad')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="discapacidad">Discapacidad</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('domicilio') border-red-500 @enderror"
                            value="{{old('discapacidad')}}"
                            id="discapacidad"
                            name="discapacidad"
                            placeholder="Discapacidad"
                            />
                            @error('discapacidad')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <h2 class="text-lg text-gray-700 font-semibold">Información de Emergencia</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">         
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre_emergencia">Nombre de Emergencia</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('nombre_emergencia') border-red-500 @enderror"
                            value="{{old('nombre_emergencia')}}"
                            id="nombre_emergencia"
                            name="nombre_emergencia"
                            placeholder="Nombre de Emergencia"
                            />
                            @error('nombre_emergencia')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="fono_emergencia">Teléfono de Emergencia</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('nombre_emergencia') border-red-500 @enderror"
                            value="{{old('fono_emergencia')}}"
                            id="fono_emergencia"
                            name="fono_emergencia"
                            placeholder="Teléfono de Emergencia"
                            />
                            @error('fono_emergencia')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <h2 class="text-lg text-gray-700 font-semibold">Selecionar Horario del Alumno</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_curso">Curso</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            @error ('id_curso') border-red-500 @enderror" 
                            value="{{old('id_curso')}}" 
                            id="id_curso" 
                            name="id_curso">
                            <option>Seleccione:</option>
                            @foreach ($cursos as $curso )
                            <option value="{{$curso->id}}">{{$curso->nombre}}</option>
                            @endforeach
                            </select>
                            @error('id_curso')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                    <br>
                    <div class="flex rounded-md bg-white py-4 px-4 overflow-x-auto">
                    <button class="px-6 py-3 bg-green-500 rounded-md text-white font-medium tracking-wide hover:bg-green-700">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 
