<%
int n = Integer.parseInt(request.getParameter("n"));
long f = 1;
for (int i = 2; i <= n; i++) f = f * i;
out.println("Factorial of " + n + " is " + f);
%>