# Before
# .nixpacks/nixpkgs-5148520bfab61f99fd25fb9ff7bfbb50dad3c9db.nix
{ pkgs ? import (builtins.fetchTarball {
  url = "https://github.com/NixOS/nixpkgs/tarball/5148520bfab61f99fd25fb9ff7bfbb50dad3c9db";
}) {} }:
# ...

# After
# .nixpacks/nixpkgs-updated.nix
{ pkgs ? import (builtins.fetchTarball {
  url = "https://github.com/NixOS/nixpkgs/tarball/<new-commit-hash>";
}) {} }:
# ...
