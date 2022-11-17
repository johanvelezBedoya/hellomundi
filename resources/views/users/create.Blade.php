@extends('layouts.dashboard')

@section('title', 'Usuarios')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg" style="width:900px">

    <h1 class="text-3xl text-center font-bold">Crear un usuario</h1>
    <br>
    <center> 
    <form action="{{route('users.store')}}" method="POST">

        @csrf

        <div class="row">

            <div class="col-1"></div>
        
            <div class="col-5">
        
        
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" name="nombre" value="{{old('nombre')}}">
        
        
                @error('nombre')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
                <br>
        
        
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Apellidos" name="apellidos" value="{{old('apellidos')}}">
        
        
                <br>
        
                @error('apellidos')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
                
                <label for="">
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Número de documento" name="numero_documento" value="{{old('numerodocumento')}}" >
                </label>
                <label for="">
                    <select name="tipodocumento_id" id="idtipodocumento" class="form-select form-select-sm my-2 mx-2 border border-gray-200 rounded-md bg-gray-200" aria-label=".form-select-sm example">
                        @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{$tipodocumento['id']}}">{{$tipodocumento['nombre']}}</option>
                        @endforeach
                    </select>
                </label>
        
                @error('numerodocumento')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
            
        
            </div>
        
            <div class="col-1"></div>
        
            <div class="col-5">
    
        
                <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo" name="email" value="{{old('email')}}">
                
        
                <br>
        
                @error('email')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
        
                <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" name="password" value="{{old('passsword')}}">
        
        
                <br>
        
                @error('password')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
        
                <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Confirmar contraseña"  value="{{old('passsword')}}">
        
        
            </div>
        </div>
        <label for=""> 
            <select name="tipopersona_id" id="idtipopersona" class="form-select my-2 border border-gray-200 rounded-md bg-gray-200" aria-label="Default select example">
                @foreach ($tipopersonas as $tipopersona)
                    <option value="{{$tipopersona['id']}}">{{$tipopersona['nombre']}}</option>
                @endforeach
            </select>
        </label>

            <br>
            <br>
            <button class="btn" style="background-color: rgb(255, 174, 0) " type="submit">Crear</button>
            <br>
            <br>
            <a style="color:black" href="{{route('users.index')}}"><b>cancelar</b></a>
            
    </form>
    </center> 
</div>
@endsection
