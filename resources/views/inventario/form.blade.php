<div class="row padding-1 p-1">
    <div class="col-md-12">

        <!-- Select de Producto -->
        <div class="form-group mb-2 mb20">
            <label for="producto_id">Producto</label>
            <select name="producto_id" id="producto_id"
                class="form-control @error('producto_id') is-invalid @enderror" required>
                <option value="">Seleccione un producto</option>
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}" {{ (isset($inventario) && $inventario->producto_id == $producto->id) ? 'selected' : '' }}>
                        {{ $producto->nombre }}
                    </option>
                @endforeach
            </select>
            @error('producto_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Stock -->
        <div class="form-group mb-2 mb20">
            <label for="stock" class="form-label">Stock</label>
            <input type="text" name="stock" 
                class="form-control @error('stock') is-invalid @enderror"
                value="{{ old('stock', $inventario?->stock) }}" 
                id="stock" 
                placeholder="Ej: 30">
            @error('stock')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Ubicación -->
        <div class="form-group mb-2 mb20">
            <label for="ubicacion" class="form-label">Ubicación</label>
            <input type="text" name="ubicacion" 
                class="form-control @error('ubicacion') is-invalid @enderror"
                value="{{ old('ubicacion', $inventario?->ubicacion) }}" 
                id="ubicacion" 
                placeholder="Ej: Estante A2">
            @error('ubicacion')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Fecha Actualización con recordatorio de formato -->
        <div class="form-group mb-2 mb20">
            <label for="fecha_actualizacion" class="form-label">
                Fecha Actualización 
                <small class="text-muted">(Formato: DD-MM-YYYY)</small>
            </label>
            <input type="text" name="fecha_actualizacion"
                class="form-control @error('fecha_actualizacion') is-invalid @enderror"
                value="{{ old('fecha_actualizacion', $inventario?->fecha_actualizacion) }}" 
                id="fecha_actualizacion"
                placeholder="14-09-2025">
            @error('fecha_actualizacion')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    </div>

    <!-- Botón Submit -->
    <div class="col-md-12 mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
